#!/usr/bin/env zsh

prefix="Agenda_"
subdirs=(DS TI COMUNICACAO)
file_in_dir=".gitignore"
dest_dir="EAD-ETEC"

if [ ! -d "$dest_dir" ] || [ ! -w "$dest_dir" ]; then
    echo "Destination directory $dest_dir does not exist or is not writable."
    exit 1
fi

for i in {00..12}; do
    dir_name="$prefix$i"
    mkdir -p "$dest_dir/$dir_name"
    if [ ! -d "$dest_dir/$dir_name" ]; then
        echo "Failed to create directory $dest_dir/$dir_name."
        exit 1
    fi
    cd "$dest_dir/$dir_name"
    for subdir in "${subdirs[@]}"; do
        mkdir "$subdir"
        if [ ! -d "$dest_dir/$dir_name/$subdir" ]; then
            echo "Failed to create directory $dest_dir/$dir_name/$subdir."
            exit 1
        fi
        touch "$dest_dir/$dir_name/$subdir/$file_in_dir"
        if [ ! -f "$dest_dir/$dir_name/$subdir/$file_in_dir" ]; then
            echo "Failed to create file $dest_dir/$dir_name/$subdir/$file_in_dir."
            exit 1
        fi
    done
    cd "$dest_dir"
done
