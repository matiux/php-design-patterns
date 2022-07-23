#! /bin/bash

WORKDIR=/var/www/app
PROJECT_NAME=$(basename "$(pwd)" | tr '[:upper:]' '[:lower:]')
PROJECT_TOOL=$WORKDIR/tools/bin/project
COMPOSE_OVERRIDE=
PHP_CONTAINER=php_design_pattern
PHP_USER=utente

if [[ -f "./docker/docker-compose.override.yml" ]]; then
  COMPOSE_OVERRIDE="-f ./docker/docker-compose.override.yml"
fi

DC_BASE_COMMAND="docker-compose --file docker/docker-compose.yml ${COMPOSE_OVERRIDE} -p ${PROJECT_NAME}"

DC_RUN_BASE="${DC_BASE_COMMAND} run --rm"
DC_RUN_NODEJS_NO_PSEUDO_TTY="${DC_RUN_BASE} -T nodejs"

DC_EXEC_PHP="${DC_BASE_COMMAND} exec -u ${PHP_USER} -w ${WORKDIR} ${PHP_CONTAINER}"
DC_EXEC_PHP_NO_PSEUDO_TTY="${DC_BASE_COMMAND} exec -T -u ${PHP_USER} -w ${WORKDIR} ${PHP_CONTAINER}"

if [[ "$1" == "up" ]]; then shift 1;                                    ${DC_BASE_COMMAND} up "$@"
elif [[ "$1" == "build" ]] && [[ "$2" == "php" ]]; then shift 2;        ${DC_BASE_COMMAND} build "$@" ${PHP_CONTAINER}
elif [[ "$1" == "enter-root" ]]; then                                   ${DC_BASE_COMMAND} exec -u root ${PHP_CONTAINER} /bin/zsh
elif [[ "$1" == "enter" ]]; then                                        ${DC_EXEC_PHP} /bin/zsh
elif [[ "$1" == "down" ]]; then shift 1;                                ${DC_BASE_COMMAND} down "$@"
elif [[ "$1" == "purge" ]]; then                                        ${DC_BASE_COMMAND} down --rmi=all --volumes --remove-orphans
elif [[ "$1" == "log" ]]; then                                          ${DC_BASE_COMMAND} logs -f

elif [[ "$1" == "conventional" ]]; then                                 ${DC_RUN_NODEJS_NO_PSEUDO_TTY} commitlint -e --from=HEAD -V
elif [[ "$1" == "composer" ]]; then shift 1;                            ${DC_EXEC_PHP_NO_PSEUDO_TTY} composer "$@"
elif [[ "$1" == "coding-standard-fix" ]]; then shift 1;                 ${DC_EXEC_PHP_NO_PSEUDO_TTY} $PROJECT_TOOL coding-standard-fix "$@"
elif [[ "$1" == "coding-standard-fix-no-pseudo-tty" ]]; then shift 1;   ${DC_EXEC_PHP_NO_PSEUDO_TTY} $PROJECT_TOOL coding-standard-fix "$@"
elif [[ "$1" == "coding-standard-check-staged" ]]; then shift 1;        ${DC_EXEC_PHP_NO_PSEUDO_TTY} $PROJECT_TOOL coding-standard-check-staged
elif [[ "$1" == "coding-standard-fix-staged" ]]; then shift 1;          ${DC_EXEC_PHP_NO_PSEUDO_TTY} $PROJECT_TOOL coding-standard-fix-staged
elif [[ "$1" == "phpunit" ]]; then shift 1;                             ${DC_EXEC_PHP_NO_PSEUDO_TTY} $PROJECT_TOOL coverage
elif [[ "$1" == "psalm" ]]; then shift 1;                               ${DC_EXEC_PHP_NO_PSEUDO_TTY} $PROJECT_TOOL psalm "$@"
elif [[ "$1" == "psalm-no-pseudo-tty" ]]; then shift 1;                 ${DC_EXEC_PHP_NO_PSEUDO_TTY} $PROJECT_TOOL psalm "$@"
elif [[ "$1" == "deptrac-all" ]]; then shift 1;                         ${DC_EXEC_PHP} $PROJECT_TOOL deptrac-all
elif [[ "$1" == "project" ]]; then shift 1;                             ${DC_EXEC_PHP_NO_PSEUDO_TTY} $PROJECT_TOOL "$@"

elif [[ "$1" == "php-run" ]]; then shift 1;                             ${DC_EXEC_PHP_NO_PSEUDO_TTY} "$@"
elif [[ $# -gt 0 ]]; then                                               ${DC_BASE_COMMAND} "$@"
else                                                                    ${DC_BASE_COMMAND} ps
fi

exit $?