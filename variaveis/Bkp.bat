@echo off
copy C:\xampp\htdocs\variaveis\*.* C:\Projetos\proj_php\variaveis
pause;
cd C:\Projetos\proj_php\variaveis
git add --all
git commit -m "Update"
gut push origin master 
pause;