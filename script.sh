for f in *; do
    if [ -d "$f" ] && [ $f != "archive" ]; then
        php sortodds.php $f;
        php s2ortodds.php $f;
        php decision.php $f;
    fi
done