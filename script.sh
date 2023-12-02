for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ]; then
        php sortodds.php $f;
        php firsttwo.php $f;
    fi
done