

<div id="top"></div>

<div align="center">


<img src="https://svg-rewriter.sachinraja.workers.dev/?url=https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2F%40mdi%2Fsvg%406.7.96%2Fsvg%2Fwidgets-outline.svg&fill=%23075985&width=200px&height=200px" style="width:200px;"/>

<h3 align="center">Admin Dashboard iFrame Widgets</h3>

<p align="center">
    Built using ACF, this plugin Creates a widget for the Wordpress administration dashboard. Enables you to embed any code including iframes.
</p>    
</div>

##  1. <a name='TableofContents'></a>Table of Contents

* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Usage](#Usage)
	* 3.1. [Enabled](#Enabled)
	* 3.2. [Title](#Title)
	* 3.3. [Slug](#Slug)
	* 3.4. [Code](#Code)
* 4. [Customising](#Customising)
* 5. [Troubleshooting](#Troubleshooting)
* 6. [Contributing](#Contributing)
* 7. [License](#License)
* 8. [Contact](#Contact)


##  2. <a name='AboutTheProject'></a>About The Project

Embed code / iframes into widgets onto admin dashboard. Can also style them with CSS.

![Screenshot](https://github.com/IORoot/wp-plugin__admin-widgets/blob/master/files/dashboard.png?raw=true)

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [ACF](https://advancedcustomfields.com/)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.2. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```sh
    git clone https://github.com/IORoot/wp-plugin__admin-widgets ./wp-content/plugins/admin-widgets
    ```
1. Activate the plugin.
1. Access via the 'options' sidemenu.


<p align="right">(<a href="#top">back to top</a>)</p>



##  3. <a name='Usage'></a>Usage

This plugin uses ACF Pro to build its dashboard. You need the 'Pro' version for the `repeater` field functionality. 

Once the plugin has been installed and activated, you can access the creator on the sidemenu under a new selection called 'options'.

You will be presented with a blank page with the "Add Row" button. Click that.

A new widget instance will be added with three fields. :
- Enabled
- Title
- Slug 
- Code 

![dashboard](https://github.com/IORoot/wp-plugin__admin-widgets/blob/master/files/admin_widgets.png?raw=true)

###  3.1. <a name='Enabled'></a>Enabled

This is a simple switch to enable/disable the widget on the admin dashboard. Handy for remembering code, but not using it.

###  3.2. <a name='Title'></a>Title

This will be the title of the widget box on the admin dashboard.

###  3.3. <a name='Slug'></a>Slug

A unique identifier that is used to create the widget. Don't use the same name on multiple widgets.

###  3.4. <a name='Code'></a>Code

This is where the magic happens. Add any code you wish to be `echo` out into the widget. Preferably HTML / CSS / JS. 
You can use iFrames and embeds for integrating anything you wish into the widget box.


##  4. <a name='Customising'></a>Customising

Use the `code` section of the options to add whatever code you like.

##  5. <a name='Troubleshooting'></a>Troubleshooting

Use github issues for any troubleshooting problems.

<p align="right">(<a href="#top">back to top</a>)</p>


##  6. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  8. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>
