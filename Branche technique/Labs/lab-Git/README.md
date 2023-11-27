
# lab-github

## Travail à Faire

**Étapes pour Créer un Conflit**

Après avoir collaboré avec quelqu'un d'autre pour travailler sur le même dépôt :

***En premier lieu, vous devez cloner votre dépôt***

```bash
git clone https://github.com/husseinbouik/lab-github.git
```

***Ensuite, vous devez cloner votre dépôt***

- Vous pouvez ensuite commencer à modifier les fichiers en fonction de vos tâches
  **=>** mais il peut arriver que vous modifiez la même ligne que votre collègue
  dans ce cas, lorsque vous essayez de fusionner votre branche avec la sienne, vous obtiendrez un conflit.

***Créez votre branche et poussez-la***

```bash
git checkout -b <branch-name>
```

Remplacez `<branch-name>` par le nom souhaité pour votre nouvelle branche. Cette commande crée une nouvelle branche et y bascule.
- Si vous souhaitez créer la branche mais rester sur votre branche actuelle, vous pouvez omettre l'indicateur -b :

```bash
git branch <branch-name>
```

Après avoir créé la branche, vous pouvez y basculer plus tard en utilisant :

```bash
git checkout <branch-name>
```

Ou, si vous utilisez Git version 2.23 ou ultérieure, vous pouvez utiliser la commande `git switch` pour changer de branche :

```bash
git switch <branch-name>
```

N'oubliez pas de remplacer `<branch-name>` par le nom réel que vous souhaitez donner à votre nouvelle branche.

***Pour fusionner les branches `barnch-1` et `branch-2` dans la branche principale, suivez ces étapes :***

***Assurez-vous que vous êtes sur la branche principale :***

Avant de commencer à fusionner, assurez-vous que vous êtes sur la branche principale. Vous pouvez basculer vers la branche principale à l'aide de la commande suivante :

```bash
git checkout main
```

***Tirez les dernières modifications :***

Il est recommandé de s'assurer que votre branche principale est à jour avec le dépôt distant avant de fusionner des branches. Vous pouvez le faire avec :

```bash
git pull origin main
```

***Fusionnez les branches :***

Pour fusionner `barnch-1` dans `main`, utilisez la commande suivante :

```bash
git merge barnch-1
```

Ensuite, s'il n'y a pas de conflits, pour fusionner `branch-2` dans `main`, utilisez :

```bash
git merge hussein
```

**Résoudre les conflits (le cas échéant) :***

En cas de conflits pendant le processus de fusion, Git s'arrêtera et vous permettra de les résoudre. Vous devrez ouvrir les fichiers en conflit, résoudre les conflits.

**Suivez ces étapes pour résoudre le conflit :***

```html
<body>
<<<<<<< HEAD
  Bonjour, je suis Jalil Betroji, un développeur full stack et stagiaire chez SoliCode.
=======
  Hussein ipsum dolor sit amet consectetur adipisicing elit.
>>>>>>> origin/hussein
  Sed maiores quo debitis harum dolorum, itaque aliquid reiciendis
  quasi repellendus aliquam alias ipsam eligendi earum voluptate totam! Quos deleniti pariatur nemo?
  ll
  lorem
  MMMM
</body>
```

- ***Accepter la modification actuelle*** : Utilisez-la si vous souhaitez conserver la modification actuelle, ignorez la modification entrante.
- ***Accepter la modification entrante*** : Utilisez-la si vous souhaitez conserver la modification entrante, ignorez la modification actuelle.
- ***Accepter les deux modifications*** : Utilisez-la si vous souhaitez conserver les deux modifications.
- ***Comparer les modifications*** : Utilisez-la si vous souhaitez comparer les modifications et voir ce que vous voulez conserver et ce que vous voulez modifier.

Ensuite, préparez les fichiers résolus en utilisant :

```bash
git add <nom-du-fichier-en-conflit>
```

Une fois tous les conflits résolus, poursuivez le processus de fusion avec :

```bash
git merge --continue
```

***Validez les modifications fusionnées :***

Après avoir résolu les conflits et vous être assuré que tout est comme vous le souhaitez, validez les modifications fusionnées :

```bash
git commit -m "Fusionner branch-1 et branch-2 dans main"
```

***Poussez les modifications vers le remote :***

Enfin, poussez les modifications fusionnées vers le dépôt distant :

```bash
git push origin main
```

Maintenant, les modifications des branches `bracnh-1` et `branch-2` sont fusionnées dans la branche principale. Assurez-vous de tester soigneusement le code fusionné avant de pousser vers la production.

le cas échéant.

## Ressources

Vous pouvez consulter la documentation officielle de Git pour en savoir plus sur les opérations mentionnées ci-dessus : [Documentation Git](https://git-scm.com/doc).

Assurez-vous de bien comprendre les concepts de base de Git, tels que le clonage, la création de branches, la fusion, la résolution de conflits, et le push vers un dépôt distant.

N'hésitez pas à explorer d'autres fonctionnalités de Git pour améliorer votre gestion de version et faciliter la collaboration avec d'autres développeurs.

---

### Remarque

Assurez-vous de tester minutieusement le code fusionné pour garantir que tout fonctionne correctement avant de le déployer en production, le cas échéant.

```
