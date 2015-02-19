<!DOCTYPE HTML>
<html>
	
	<head>
<style type="text/css">

label {
	display: block;
	margin-top: 20px;
	letter-spacing: 2px;
}

.body {
	display: block;
  margin: 0 auto;
  width: 576px;
}

form {
  margin: 0 auto;
  width: 459px;
}

input, textarea {
  width: 439px;
  height: 27px;
  background: #efefef;
  border: 1px solid #dedede;
  padding: 10px;
  margin-top: 3px;
  font-size: 0.9em;
  color: #3a3a3a;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
}

input:focus, textarea:focus {
  border 1px solid #97d6eb;
}

#submit {
  margin-top: 5px;
  -webkit-border-radius: 44;
  -moz-border-radius: 44;
  border-radius: 7px;
  font-family: 'Montserrat', sans-serif;
  color: #ffffff;
  font-size: 20px;
  background: #B0BC22;
  padding: 15px 20px 15px 20px;
  text-decoration: none;
  border-width: 0px;
}

    #sumit:hover {
      background: #c4d333;
      text-decoration: none;
    }

textarea {
  height: 213px;
}

</style>
	</head>
	<body>
		<header class="body">
		</header>
		<section class="body">
			<form>
				<label>Name</label>
				<input name="name" placeholder="Type Here">

				<label>Email</label>
				<input name="email" type="email" placeholder="Type Here">

				<label>Message</label>
				<textarea name="message" placeholder="Type Here"></textarea>

				<input id="submit" name="submit" type="submit" value="Submit">
			</form>
		</section>
		<footer class="body">
		</footer>
	</body>

</html>