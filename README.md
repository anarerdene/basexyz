# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* BaseXYZ
* Alpha version

### Суулгах заавар? ###

* GIT version controll суулгасан байх. [ GIT  гэж юу вэ ?](https://www.atlassian.com/git/tutorials/what-is-git/)
* Ubuntu болон OSX дээр [Homebrew](http://brew.sh/) ашиглан "brew install git" коммандаар GIT суулгана.
* Windows дээр https://git-scm.com/download/win татаж суулгана.
* "git clone git@bitbucket.org:arvientech/basexyz.git" коммандыг терминал дээр ажиллуулах.


### Файлын бүтэц ###

* Writing tests
* Code review
* Other guidelines

### Ашиглах заавар ###

* Other community or team contact

### Анхаарах зүйлс ###

* echo() function ашиглаж байгаа үед заавал "escape" хийдэг байх. (esc_attr, esc_html, esc_url).
* Wordpress дээр ашиглагддаг бүх default css class-г  [эндээс харна уу](https://gist.github.com/madalinignisca/5568192)

### Хэрэгцээт функцүүд ###

* Файлын замыг зөв заах
* BASEXYZ_THEME_PATH - name.php файлын байршил заахад хэрэглэнэ. ( get_template_directory(); )
* BASEXYZ_THEME_URL - Assets файлууд буюу css,js,img зэргийн байршил заахад хэрэглэнэ. ( get_template_directory_uri(); )

### Хөгжүүлэлтэнд анхаарах зүйлс ###

### Тест хийх ###
* XML unit тест эсвэл http://wptest.io/ ашиглах.
* PHP unit тест.
* JS unit тест.



### Compile: ###

* Compile фроццэс нь "BaseXYZ" гэсэн бүх утгыг шинэ theme-н нэрээр солих бөгөөд эцсийн бүтээгдхүүнд шаардлаггүй хөгжүүлэлтэнд ашигдагдсан файлууд болон нуудсан файлуудыг алгасан "ZIP" байдлаар гаргаж өгнө.
* NPM Grunt суусан байх шаардлагтай
* "grunt compile 'theme-name' " коммандыг ажиллуулж эцсийн бүтээгдэхүүнийг гаргаж авна.