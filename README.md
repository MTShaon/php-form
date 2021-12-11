## Form data management with all Validation
This is a learning resource content management for form management and data validation step by step

### Get Data 
- set or check form tag 
- put a method GET, POST, REQUEST
- Set enctype="multiport/form-data" if upload a file
- Set name for all form element
- Get data by SuperGlobal $_GET, $_POST, $_Request

```html

	  <form action="" method="">	
		  <input name="name" type="text" placeholder="Name">
		  <input name="email" type="text" placeholder="Email">
		  <input name="cell" type="text" placeholder="Cell">
		  <input name="age" type="text" placeholder="Age">
		  <input name="submit" type="submit" value="SEND"> 	
</form>
```

#### form data issetting
By using isset function we can solve err notice

```php
/** 
 * For isseting 
 */
 
    if(isset($_POST["submit"]))
    {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $cell = $_POST["cell"];
        $age = $_POST["age"];     
    }
```

#### Empty value check
we can check empty value by empty function

```php
//empty value check
  if(empty($name) || empty($email) || empty($cell) || empty($age))
        {
            $mess =  "<p style= \" color:red; \"> Please fulfill All the fields<p>";
        }
        else {
            $mess =  "<p style= \" color:green; \">ok<p>";
        }
```

```php
// show validation message
if(isset($mess)){
	echo $mess;
}

```




