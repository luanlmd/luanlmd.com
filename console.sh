#!/bin/bash

function bash
{
        docker-compose exec web bash
}

function build
{
        docker build -t luanlmd/luanlmd.com . "$@"
}

"$@"
