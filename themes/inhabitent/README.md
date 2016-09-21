<<<<<<< HEAD
# RED Starter

A WordPress starter theme for RED Academy students, forked from Underscores.

Download me, add me to your `wp-content` directory, rename me, and and start themin'!

## Using with VVV

To get Browsersync working from within you VVV virtual machine (as configured this theme's `gulpfile.js`), you're going to need a bit of initial configuration.

### 1. Add port forwarding to your Vagrantfile

Just like with ScotchBox, we're going to need to set up port forwarding in our `Vagrantfile` so that `localhost:3000` on your VM can talk to `localhost:3000` on your host machine.

Add the following line under the "Port Forwarding" section in your VVV `Vagrantfile`

```ruby
config.vm.network "forwarded_port", guest: 3000, host: 3000
```

Be sure to `vagrant reload` after this!

### 2. Install Gulp inside VVV

Unlike ScotchBox, VVV doesn't come with Gulp pre-installed.

To install Gulp, `vagrant up` then `vagrant ssh` and run the following command:

```bash
sudo npm install --global gulp-cli
```

### 3. Install the dev dependencies

Next you'll need to run `npm install` inside your theme directory next to install the node modules you'll need for Gulp, etc.

You may have better luck with the package installation if you run `npm install` from your **host** machine (not from within the VM). This means that you will need to have Node installed on your actual computer to do this.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy.

Now you should be able to `vagrant ssh` into your cd into `/vagrant/www/YOUR_SITE_DIR/htdocs/wp-content/themes/YOUR_THEME_DIR` and run `gulp` to get Browsersync up and running.

Note that you will have to manually navigate to `localhost:3000` to see your site (it won't automatically launch in your browser).
=======
![screen shot 2016-08-20 at 8 49 48 am](https://cloud.githubusercontent.com/assets/20249491/17832612/35b81cea-66bc-11e6-8b50-edb054e772d5.png)



# Inhabitent- Project 4

#Summary 

In this project I use a custom wordpress theme that required useing PHP, JQuery, and CSS/SASS.

# The language that use in this project: 

* JavaScript
* JQuery
* CSS/SASS
* Gulp
* WordPress CMS
* WordPress Underscore (theme basis)
* Git/Github


# What I've learn from this Project :

Working with Red Starter theme involved a lot of styling and that was both a fun and challenging experience, especially since it's a multi-page site unlike our other projects that I've done in class.
>>>>>>> 9f16b4a749e302a6c887fece877ef90df10d076d
