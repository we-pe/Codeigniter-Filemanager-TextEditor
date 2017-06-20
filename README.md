# Codeigniter-Filemanager-TextEditor #

## **What is this repository for?** ##
The main feature on this repository is connecting codeigniter session with responsive file manager.

## **Requirement** ##
* PHP >= 5.4.0
* CodeIgniter > 3.0.0

## **How do I use ?** ##
* Load Nativesession library
````php
$this->load->library('nativesession');
````
* Setup your security session name (the default session name is 'subfolder')
````php
$this->nativesession->set('subfolder', '');
````
* Even up session name on this file `assets/filemanager/config/config.php` and `assets/filemanager/dialog.php`
````php
isset($_SESSION["subfolder"])
````

## **You can use other option on Native Session library** ##
| Function             | Parameter      | Description               |
| :------------------- | :------------- | :------------------------ |
| `set`                | `(key, value)` | create new session        |
| `get`                | `(key)`        | get session value         |
| `regenerateId`       | `none`         | regenerate session ID     |
| `delete`             | `(key)`        | delete session name       |

## **Resources** ##
* Codeigniter
  https://codeigniter.com/.

* Responsive File Manager
  http://www.responsivefilemanager.com/.

* TinyMCE
  https://www.tinymce.com/.
  
* CKEeditor
  http://ckeditor.com/.
  
* My Inspiration Native Session on this articles
  http://www.moreofless.co.uk/using-native-php-sessions-with-codeigniter/.
