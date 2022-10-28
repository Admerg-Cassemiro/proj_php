@echo off
copy C:\xampp\htdocs\variaveis\*.* C:\Projetos\proj_php\variaveis
cd C:\Projetos\proj_php\variaveis
git add --all
git commit -m "Update"
git push origin master 
pause;