## TO NOTE
When running development server, data won't be retrieved from the apache2-php server. 
This is due to the same-origin policy: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS. Both servers have different origins.
Use an extension to disable CORS.
This is NOT an issue with production build.


## Project setup
```
npm install
```

### Compiles and hot-reloads for development
```
npm run serve
```

### Compiles and minifies for production
```
# Creates new folder /dist
npm run build
```

### Lints and fixes files
```
npm run lint
```

### Customize configuration
See [Configuration Reference](https://cli.vuejs.org/config/).
