for oldfile in *.none;
do
cp "$oldfile" "`basename "$oldfile" .none`".php;
done
