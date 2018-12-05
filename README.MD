# Template basic pour projet web lpmiaw 2018/2019

> petit essai collaboratif

## Bonne pratique

- Avant de :running: :ocean: :sweat_drops: :swimmer: dans le code.

- Etape 1:  :eyes: :computer: (regarder la maquette)  :scissors:  :pencil: (découper la maquette ).

## HTML

### Petite explication

``` HTML
    <div id="wrapper">
        sous-conteneur optionnel pour centrer plusieurs blocs de la même manière
    </div>
```

``` HTML
    <div class="inner"> 
        sous-conteneur optionnel à le meme rôle que le wrapper
    </div>
```

``` HTML
    <main id="main" role="main">
        conteneur général du contenu principal, typiquement ce qui n'est pas dans le
        header et le footer
    </main>
```

``` HTML
    <header id="header" role="banner">
        Entête global, comportant souvent la navigation et des éléments qui se
         retrouvent en commun sur (quasiment) toutes les pages,
          On peut trouver plusieurs balises header,
           mais le role="banner doit être unique dans la page
    </header>
```

``` HTML
     <footer id="footer" role="contentinfo"> : pied de page global comportant des éléments qui se retrouvent en commun sur (quasiment) toutes les pages On peut trouver plusieurs balises footer, mais le role="contentinfo" doit être unique dans la page.</footer>
```

``` HTML
     <aside class="aside" role="complementary"> : barre latérale globale.
          Note : doit pouvoir être extrait de la page sans poser de problème, en clair ne pas y placer la navigation par exemple.
    </aside>
```

``` HTML
     <nav id="navigation" role="navigation"> 
          navigation principale
     </nav>
```

```HTML
    <form id="search" role="search"> 
         recherche principale
    </form>
````

> Pour l'accesibilité

utliser l'attibut [rôle](https://www.w3.org/TR/html-aria/#sec-strong-native-semantics)

```HTML
    <div role ="" >
        Choucroute, bière, knack, picon, ...
    </div>
```

```HTML
<!-- Base pour l'accessibilité -->
    <div class="skip-links">
        <!-- N’utilisez surtout pas de propriétés CSS qui les rendent inactifs 
        ou les attributs hidden et aria-hidden sinon plus visible pour les lecteurs 
        d'écrans -->
        <a href="#navigation" tabindex="1">Aller au menu</a>
        <a href="#main">Aller au contenu</a>
        <a href="#search">Aller à la recherche</a>
    </div>
```

## CSS

``` CSS
.wrapper {
    margin: 0 auto;

    /* pour un wrapper de 980px */
    max-width: 960px;

    /* ajout d'un padding pour eviter que les blocs soit collé */
    padding-right: 10px;
    padding-left: 10px;
}
```

```CSS
html {
    font-size: 62.5%;
    /*
    HACK:
    font-size par defaut est de 16px (dans la pluspart des navigateurs) donc si la taille par defaut(16px) * 62.5% = 10px,  donc 1rem  = 10px;
    else si taille à été modifié permet de conserver les préférences de l'utilisateurs et changer l'apparence en conséquence
    */
}
```

- Reset personnelle peut être remplacé par celui de [éric meyer](https://meyerweb.com/eric/tools/css/reset/)  ou  [Normalize.css](https://github.com/necolas/normalize.css/)


```CSS
/* Reset */
*,
*::after,
*::before {
    margin: 0;
    padding: 0;
    box-sizing: inherit;
    /* TODO:Better practice*/
}
ol,
ul {
    list-style: none;
}

body {
    box-sizing: border-box;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}
```

>Petit truc

permet de mieux visualiser les blocs

```CSS
*{
    outline: red solid 1px;
}

```

améliorer la fluidité des animations

```CSS
.animation{
    /* pour les animations utiliser plutot ces propriétés  */
    filter: grayscale();
    opacity: 0;
    transform: rotate3d() ;
    /* pour des raisons de preformance */
    /* pour fluidifier les animations possibiliter d'activer la carte graphique */
    perspective: 1px; /* HACK: css */
    /* ou utiliser les attributs X,Y,Z */
}
```

> Pour l'accesibilité

```CSS
.skip-links {
    position: absolute;
}

.skip-links a {
    position: absolute;
    left: -9999px;
    padding: 0.5em;
    background: #000;
    color: #fff;
    text-decoration: none;
}

.skip-links a:focus {
    position: static;
}
```

## liens utiles

- [Guide ministériel pour des sites accesible](https://github.com/DISIC/guide-integrateur)
- [Alsacréation : liste de site de références](https://github.com/alsacreations/guidelines/blob/master/Ressources-liens.md)

## Source
