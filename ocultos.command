#!/bin/bash
clear
printf "¿Desea ver los objetos carpetas y ficheros ocultos del sistema? Y/N "
read REQUEST

if [ "$REQUEST" = "Y" ] || [ "$REQUEST" = "y" ] ; then
	defaults write com.apple.finder AppleShowAllFiles TRUE
	killall Finder
	echo "Operación realizada, ficheros ocultos visibles"
elif [ "$REQUEST" = "N" ] || [ "$REQUEST" = "n" ]; then
	defaults write com.apple.finder AppleShowAllFiles FALSE
	killall Finder
	echo "Operación realizada, ficheros ocultos no están visibles"
else
	echo "Comando $REQUEST no reconocido."
fi    


