# wikipeep
WikiPeep is a learning technology platform based in Gothenburg, Sweden.

## Språk, frameworks, paket

Vi kommer använda paket / frameworks i nästan alla språken vi använder. HTML kommer inte använda Backbone, Jade eller någonting liknande utan kommer bara var vanlig HTML kod. Vår CSS kommer vara skriven i sass och direkt installerad och komprimerad med Ruby (gems). Med Sass kommer vi översens om Compass, Bourbon eller Bootstrap är bästa alternativet. Till JavaScript kommer vi använda jQuery och eventuellt Angular. När det gäller server språket så kommer vi använda PHP, antagligen utan frameworks men vi kanske använder Slim / Laravel. Backend systemet kommer vara drivet av MySQL och drivas med PHPMyAdmin. Alla encryptioner kommer vara med bcrypt. APIn kommer vara i JSON. 

### Förutsättningar

XAMPP / MAMP / LAMP / WAMP

Atom / Sublime / Brackets

Ruby

Sass

Git

Composer (kanske)


### Upplägg

nilsgarland: PHP / MySQL, Sass, Bootstrap, jQuery
En: Bootstrap, CSS
totpoter: PHP, Bootstrap, lite Sass, lite jQuery

# Hur kommer allt utföras?

Den här sektionen talar om hur vi kommer arbeta och i vilken ordning.  (Följande titlar ej i ordning)

### Fil systemet

Först installera en Apache med MySQL och PHP som t.ex [xampp](https://www.apachefriends.org/).

Sedan installera [Ruby](https://www.ruby-lang.org/en/downloads/) (Behövs ej med MAC)

Sen behöver du installera Sass genom gems. Så öppna terminalen cda in i git mappen och skriv

```
gem install sass
```

Sen finns det några Sass saker som man ska göra i terminalen men nilsgarland tar det då.

Om du inte har en text editor, ladda ner en.

### Git / GitHub

Vi kommer använda git i terminalen för att få allas arbete. Vi kommer hosta alla filerna på den här sidan (GitHub).

Ladda ner [git](https://git-scm.com) och installera det i din terminal, kolla om installeringen fungerade genom att skriva.

```
git --help
```

Sedan registrera dig på [GitHub](https://github.com).

Nu ska vi ta en titt på olika kommandon vi kommer använda i terminalen.

För att installera repot från github skriv: (Kommer användas en gång)
```
git clone https://github.com/wikipeep/wikipeep.git
```

Om du behöver uppdatera dina filer för att se om andra har uppdaterat skriv
```
git pull
```

Lägg till alla filer i terminalen.
```
git add *
```

Skriv commit medelandet
```
git commit -m "Updaterade PHP filen!"
```

Ladda upp filerna
```
git push
```

### Arbets ordning

Simpel markup med menyn och startsidan.

Simpel CSS / SASS (i en scss eller sass fil)

Sortera kategorierna i navigationen

Artikel sidorna med pagination (GET metoden)

Artikel design i sass

Lite mer detaljer på artikel sidorna

Ett log in system, som egentligen endast är till för forumet. Så den bör anpassas efter det.

Börja ett forum på varje atrikel. Så man kan fråga en fråga om en artikel och sedan kommer alla frågor på forums sidan.

Göra alla artiklarna (TRÅKIGA DELEN)

Om vi kommer på ideer på vägen så kan vi ta det då (:

## Contributing

Contibuting will only be able under the MIT licensed Wikipeep API.

## Authors

* **Wikipeep** - *Team* - [View Github Profile](https://github.com/wikipeep)

See also the list of [contributors](https://github.com/wikipeep/wikipeep/contributors) who participated in this project.

## License

This project is licensed under the AWP License - see the [LICENSE](LICENSE) file for details
