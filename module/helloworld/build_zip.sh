MODULE='helloworld'
ARCHIVE=$MODULE'.zip'

rm $ARCHIVE

cd ..

#zip the folder but exclude the .git folder. Add more folders here you want to exclude
zip -r $ARCHIVE $MODULE -x $MODULE'/.git/*'

mv $ARCHIVE $MODULE