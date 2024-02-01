# Small PHP MVC Framework

This is a basic MVC framework written in PHP designed for learning and example purposes. The framework provides the core structure and scaffolding to start building an application using the model-view-controller pattern.

## Notes

This is my first simple php framework as learning exercise for creating a Php MVC Framework. As such, it may contain a few bugs, as its primary purpose is for practice and educational purposes. The focus is on providing a hands-on experience to understand the fundamentals of building a basic MVC framework using PHP. Your contributions and insights into improving this learning project are highly appreciated!

## Getting Started

To use this framework, clone the repository and run it on a PHP server such as Apache. The main entry point is the `public/index.php` file, which loads the core framework code and routes the request to the appropriate controller.

### Folder Structure

- `app/models` - Contains classes for models
- `app/views` - Contains view files
- `app/controllers` - Contains controller classes
- `app/libraries` - Contains core framework classes
- `public` - Document root contains `index.php` entry point

### Controllers

Controllers handle requests and build the response. The base `Controller` class provides methods to load models and views, and controllers extend this base class. An example `Pages` controller with `index()` and `about()` actions is provided.

### Models

Models manage data and business logic. Sample models can be created by extending the base model class.

### Views

Views are template files that render the response, residing in the `app/views` folder.

### Routing

The `Core` class handles routing using the URL path to determine the controller, action, and parameters.

URL format: `/controller/method/param1/param2`

Maps to:

- Controller: `app/controllers/Controller.php`
- Method: method on the controller class
- Params: passed to the method

## Usage

Example usage:

- Home page: `/pages/index`
- About page: `/pages/about`
- Contact page: `/contact/index`

## Further Learning

This framework contains the bare essentials to demonstrate MVC concepts. Further features can be added, such as:

- Database integration
- ORM models
- Templating engine
- Form validation
- Authentication and authorization
- API support
- Caching
- Error handling

The goal is to learn how the components work together to build a simple framework from scratch.

Let me know if you would like any changes or have additional sections to add!
