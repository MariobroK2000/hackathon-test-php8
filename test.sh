#!/bin/sh

./phpunit LevelA;
LEVELA=$?;
SCORE=0;
if [ $LEVELA = 0 ]; then
        SCORE=5;
fi

NAME='plop';
if [ $1 ]; then
        NAME=$1;
fi

DATE='000000';
if [ $2 ]; then
        DATE=$2
fi

echo "SCORE:"$SCORE
#echo "$NAME;$DATE;$SCORE" >> ../../../scores.csv