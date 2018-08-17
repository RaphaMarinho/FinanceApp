var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'My App',
  // App id
  id: 'com.myapp.test',
  // Enable swipe panel
  panel: {
    swipe: 'left',
  },
    panel: {

        swipe: 'left',
        leftBreakpoint: 768,
        rightBreakpoint: 1440,


    },

    navbar: {
        hideOnPageScroll: true,
        showOnPageScrollEnd: false,
        showOnPageScrollTop: false,
    },

    routes: [

        {
            path: '/conta/',
            url: 'conta.html',
    },

        {
            path: '/home/',
            url: 'home.html',

        },

        {

            path: '/cadastro/',
            url: 'cadastro.html',

        },
        
        {

            path: '/indexlogin/',
            url: 'index.html',

        },

  ],





});

var mainView = app.views.create('.view-main');