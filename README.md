# Easy Twitter API

A wrapper using OAuth self-authentication to expose Twitter REST API 1.1 endpoints for client-side use.

# How to install

1. Clone the `master` branch into the directory on your webserver you want to use for API access.
2. Edit `twitter-api.config` replacing `YOUR-CONSUMER-KEY`, `YOUR-CONSUMER-SECRET`, `YOUR-USER-TOKEN`, and `YOUR_USER_SECRET` with your respective information found on the [Twitter Apps page](https://apps.twitter.com/)
3. Add the following to your `.HTACCESS` file, replacing `INSTALL-DIR` with the directory you installed Easy API into:

```
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^INSTALL-DIR/1.1/(.*)$ INSTALL-DIR/requests.php?request=$1 [QSA,L]
RewriteRule ^INSTALL-DIR/twitter-api.config$ - [R=403]
```

#How to use
All Twitter API 1.1 endpoints accessable through self-authentication are available through the same path from api.twitter.com.
For example: `api.twitter.com/1.1/statuses/user_timeline.json?screen_name=20c109&count=30` is available at: `mywebsite.com/INSTAL-DIR/1.1/statuses/user_timeline.json?screen_name=20c109&count=30`
For more information on Twitter API endpoints, see the [Twitter REST API documentation](https://dev.twitter.com/rest/public).
