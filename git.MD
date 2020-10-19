#### Initialisation d'un projet GIT
```
git init
```

#### liste des parametres Git 
```
git config --list
```

#### Modification des parametres Git
```
git config global user.name "name"
git config global user.email "email@email.com"
```


#### indexation de tous les fichiers modifiés (stage)
```
git add -a
git add --all
```

remarque :
on peut ajouter des fichiers ou dossiers à ignorer dans le
fichier .gitignore
```
###> symfony/framework-bundle ###
/.idea
/.env.local
/.env.local.php
/.env.*.local
/config/secrets/prod/prod.decrypt.private.php
/public/bundles/
/var/
/vendor/
###< symfony/framework-bundle ###

###> symfony/phpunit-bridge ###
.phpunit
.phpunit.result.cache
/phpunit.xml
###< symfony/phpunit-bridge ###
```

#### Status des fichers de travail
```
git status 
```

#### Creation d'un commit
```
git commit -m "message du commit"
```

#### historique des commits
```
git log --oneline
```

#### Merger commit
attention le commit doit etre stager
```
git commit --amend -m "nouveau message"
```

#### Créer un dépot distant
> gitLab -> https://gitlab.com/
