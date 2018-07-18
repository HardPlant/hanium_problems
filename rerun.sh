#!/bin/bash
#해당 위치에서 실행하지 말것

docker stop $(docker ps -aq);docker rm $(docker ps -aq); bash 0.build.sh; bash 1.run.sh