#!/usr/bin/env zsh

prefix="Agenda_"
subdirs=(DS TI COMUNICACAO)

for i in {00..12}
do
    dir_name="$prefix$i"
    mkdir "$dir_name"
    cd "$dir_name"
    for subdir in "${subdirs[@]}"
    do
        mkdir "$subdir"
    done
    cd ..
done
