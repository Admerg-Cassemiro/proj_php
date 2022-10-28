@echo off
copy C:\xampp\htdocs\variaveis\*.* C:\Projetos\proj_php\variaveis\
copy C:\xampp\htdocs\session\*.* C:\Projetos\proj_php\session\
cd C:\Projetos\proj_php\
git add --all
git commit -m "Update"
git push origin master 
pause;