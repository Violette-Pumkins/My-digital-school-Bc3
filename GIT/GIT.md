prof mail: vincent@agence-sparrow.com
discord: @Cap't Vincent #2625
num: 07 65575589


# cmd
créer projet: mkdir 'titre'
-------
cd dans projet
-----
ls lister fichiers
------


cat: voir contenu fichier
------
nano: éditeur de code
-----
cat ~/.gitconfig : show user
-----

refractor vs code a gratter
code

git clone -> projet distant a cloner sur pc
(ssh a regratter, a parametrer avec git)

git clone 'url'cd
git clone git@github.com:FakerPHP/fakerphp.github.io.git cloneFaker

créer fichier: touch  README.md
git status -s (suivis de fichier)
git log: commits et action sur fichier
git checkout
git checkout main (master)
cat README.md

fichier créer, indexation, modification

add - commit - update - 

ignorer repertoire

touch gitignore
gitignore
exclusion

aIgnorer/
(sauf certains) : ! asuivre.md
!*/
!*/aIgnorer/asuivre.md


~*
.DS/

Git diff: qui a été modifié et pas indéxée, qui a été indéxé et pret pour la validation, montre changements lignes par lignes
markdown: ``` language + code ```= coloration syntaxique comme sur discord

git diff --cached : permet de voir changement enregistrée mais pas commit
-v ajoute diff dans le comm
-m 'my comment' ajoute commentaire sans passer pas IDE
une fois validation OK commit = id (SHA-1)

commit + add == git commit -a -m "blablabla" (pour fichier deja connu)

voir commits: 
git log -3 (3 derniers commits)
git log pretty=format : formate les log pour + clarté et analyse
format/pattern a créer.

modifier commit (sauf certaines modif perma)

pour supprimer commit: supprimer les heads

checkout -- nom du fichier

remote : recupérer données dépôt distant

étiquettage / tag: 

a chaque étape/morceaux fonctionnels (ex: 0.01 a vs 0.1)

git tag -a v1.1.0 (commit direct + tag)

git push origin (envoyer v 1.1.0)

git push origin --tags (envoie tous les tags)

perk tags: git checkout -b (version) (version is managed like branch)



new branch: git branch testing

f3efd3f (HEAD -> master, tag: v1.0.1, testing) dragons blog
$ git checkout testing
git checkout testing == move to branch testing
commit -a -m met dans branche testing

revenir sur master git checkout master
git log --oneline --decorate --graph --all (all branch graphic)

branche scénario:

-créer branche article en cours
-travaille dessus
-probleme a regler -> rebasculer sur production (master)
- branche correctif
- tester si ça marche
- merge correctif +prod
- continuer travail article


$ git checkout -b 'branch title' == git branch + checkout 
"comm\'it"

rebase: deplacer pour le faire jouer a partir d'un commit

##### doc a chaque exos


Tango (super bien pour docu) 
Gather town (remote work)
Docker (aide avec machines, installation droite et gauche, évite les bugs sur machine)

diplome de CDA
------
Phase de conception apprise puis mise en application solutions
Architecture étudiée
Prise de decision et gestion de projet

Concepteur Développeur Application

>Raisonnement plus important que résultat
Programme doit être scalable  
> scalable == évolutif

>réseauter, demander conseil, conférences, dév personnel.

CICD
=====

github workflow ( Continuous integration )

Mise en prod facile et automatique
> à gratter

Terraform
---------
> a gratter 
> comme google cloud
> oh my ZSH ou fig (a gratter)

GITFLOW
=====

important gestion travail
publier -> pour donner le taff a distance a une autre machine (gitflow est limité a la machine)
push -> envoyer
pull -> ramener les données
voir tuto cheatsheet

[Primary](https://danielkummer.github.io/git-flow-cheatsheet/index.fr_FR.html){.btn .btn-primary}

commandes:

git flow - [init] - [feature/release/hotfix] - [start/finish/publish/pull] - [name] 

branche release = a push dans le main, tag / version de livraison

pas aller en prod a la main: 

étapes mise en prod:
------
- faire un pull sur serveur
- yarn installe /npm / composer
- mise a jour bdd
  
faire des release régulièrement sinon: 
blocage dut aux changement client

(gitflow-ex -> créer dossier puis clic droit, git bash here)

créer un git flow:
---------
- créer dossier 
- init dossier (git init)
- créer projet (mkdir 'nom projet')
- rentrer dans le projet (cd 'nom dossier')
- init projet (git init)
- créer fichier README.md (touch README.md)
- add fichier (git add 'nf')
- commit file (git commit -m "comm")
  
creation nouveau projet github
-----

création clé ssh
----------
[Primary](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent){.btn .btn-primary}


* Note: linux a gratter a fond, emmanuel help. Vps? *
 


