# OpenAPIServer   Test
API for the Catrobat Share Platform

This [Symfony](https://symfony.com/) bundle is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: v1.0.40
- Build package: org.openapitools.codegen.languages.PhpSymfonyServerCodegen
For more information, please visit [https://share.catrob.at](https://share.catrob.at)

## Requirements

PHP 7.1.3 and later

## Installation & Usage

To install the dependencies via [Composer](http://getcomposer.org/), add the following repository to `composer.json` of your Symfony project:

```json
{
    "repositories": [{
        "type": "path",
        "url": "//Path to your generated openapi bundle"
    }],
}
```

Then run:

```
composer require GIT_USER_ID/GIT_REPO_ID:dev-master
```

to add the generated openapi bundle as a dependency.

## Tests

To run the unit tests for the generated bundle, first navigate to the directory containing the code, then run the following commands:

```
composer install
./vendor/bin/phpunit
```


## Getting Started

Step 1: Please follow the [installation procedure](#installation--usage) first.

Step 2: Enable the bundle in the kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new OpenAPI\Server\OpenAPIServerBundle(),
        // ...
    );
}
```

Step 3: Register the routes:

```yaml
# app/config/routing.yml
open_api_server:
    resource: "@OpenAPIServerBundle/Resources/config/routing.yml"
```

Step 4: Implement the API calls:

```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface // An interface is autogenerated
{

    /**
     * Implementation of AuthenticationApiInterface#authenticationGet
     */
    public function authenticationGet()
    {
        // Implement the operation ...
    }

    // Other operation methods ...
}
```

Step 5: Tag your API implementation:

```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.authentication:
        class: Acme\MyBundle\Api\AuthenticationApi
        tags:
            - { name: "open_api_server.api", api: "authentication" }
    # ...
```

Now you can start using the bundle!


## Documentation for API Endpoints

All URIs are relative to *https://share.catrob.at/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApiInterface* | [**authenticationGet**](Resources/docs/Api/AuthenticationApiInterface.md#authenticationget) | **GET** /authentication | Check token
*AuthenticationApiInterface* | [**authenticationPost**](Resources/docs/Api/AuthenticationApiInterface.md#authenticationpost) | **POST** /authentication | Login
*MediaLibraryApiInterface* | [**mediaFileIdGet**](Resources/docs/Api/MediaLibraryApiInterface.md#mediafileidget) | **GET** /media/file/{id} | Get the information of a specific media file
*MediaLibraryApiInterface* | [**mediaFilesGet**](Resources/docs/Api/MediaLibraryApiInterface.md#mediafilesget) | **GET** /media/files | Get *all* content of the media library.
*MediaLibraryApiInterface* | [**mediaFilesSearchGet**](Resources/docs/Api/MediaLibraryApiInterface.md#mediafilessearchget) | **GET** /media/files/search | Search for mediafiles associated with keywords
*MediaLibraryApiInterface* | [**mediaPackagePackageNameGet**](Resources/docs/Api/MediaLibraryApiInterface.md#mediapackagepackagenameget) | **GET** /media/package/{package_name} | Get media-library asstes of a named package
*ProjectsApiInterface* | [**projectProjectIdGet**](Resources/docs/Api/ProjectsApiInterface.md#projectprojectidget) | **GET** /project/{project_id} | Get the information of a project
*ProjectsApiInterface* | [**projectsFeaturedGet**](Resources/docs/Api/ProjectsApiInterface.md#projectsfeaturedget) | **GET** /projects/featured | Get the currently featured projects
*ProjectsApiInterface* | [**projectsGet**](Resources/docs/Api/ProjectsApiInterface.md#projectsget) | **GET** /projects | Get projects
*ProjectsApiInterface* | [**projectsPost**](Resources/docs/Api/ProjectsApiInterface.md#projectspost) | **POST** /projects | Upload a catrobat project
*ProjectsApiInterface* | [**projectsSearchGet**](Resources/docs/Api/ProjectsApiInterface.md#projectssearchget) | **GET** /projects/search | Search for projects associated with a keywords
*ProjectsApiInterface* | [**projectsUserGet**](Resources/docs/Api/ProjectsApiInterface.md#projectsuserget) | **GET** /projects/user/ | Get the projects of the logged in user
*ProjectsApiInterface* | [**projectsUserUserIdGet**](Resources/docs/Api/ProjectsApiInterface.md#projectsuseruseridget) | **GET** /projects/user/{user_id} | Get the public projects of a given user
*UserApiInterface* | [**userDelete**](Resources/docs/Api/UserApiInterface.md#userdelete) | **DELETE** /user | Delete user account
*UserApiInterface* | [**userGet**](Resources/docs/Api/UserApiInterface.md#userget) | **GET** /user | Get your private user data
*UserApiInterface* | [**userIdGet**](Resources/docs/Api/UserApiInterface.md#useridget) | **GET** /user/{id} | Get the public data of a user
*UserApiInterface* | [**userPost**](Resources/docs/Api/UserApiInterface.md#userpost) | **POST** /user | Register
*UserApiInterface* | [**userPut**](Resources/docs/Api/UserApiInterface.md#userput) | **PUT** /user | Update User
*UserApiInterface* | [**usersSearchGet**](Resources/docs/Api/UserApiInterface.md#userssearchget) | **GET** /users/search | Search for users
*UtilityApiInterface* | [**healthGet**](Resources/docs/Api/UtilityApiInterface.md#healthget) | **GET** /health | Health Check


## Documentation For Models

 - [BaseUser](Resources/docs/Model/BaseUser.md)
 - [DryRun](Resources/docs/Model/DryRun.md)
 - [FeaturedProject](Resources/docs/Model/FeaturedProject.md)
 - [JWTTokenResponse](Resources/docs/Model/JWTTokenResponse.md)
 - [Login](Resources/docs/Model/Login.md)
 - [MediaCategories](Resources/docs/Model/MediaCategories.md)
 - [MediaCategory](Resources/docs/Model/MediaCategory.md)
 - [MediaFile](Resources/docs/Model/MediaFile.md)
 - [MediaPackage](Resources/docs/Model/MediaPackage.md)
 - [MediaPackages](Resources/docs/Model/MediaPackages.md)
 - [Project](Resources/docs/Model/Project.md)
 - [ProjectUpload](Resources/docs/Model/ProjectUpload.md)
 - [Register](Resources/docs/Model/Register.md)
 - [RegisterError](Resources/docs/Model/RegisterError.md)
 - [UpdateUser](Resources/docs/Model/UpdateUser.md)
 - [UpdateUserAllOf](Resources/docs/Model/UpdateUserAllOf.md)
 - [UpdateUserError](Resources/docs/Model/UpdateUserError.md)
 - [UploadError](Resources/docs/Model/UploadError.md)
 - [UserPrivateGet](Resources/docs/Model/UserPrivateGet.md)
 - [UserPublicGet](Resources/docs/Model/UserPublicGet.md)


## Documentation For Authorization


## PandaAuth

- **Type**: HTTP basic authentication


## Author

webmaster@catrobat.org


