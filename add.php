<!DOCTYPE html>
<html>
<head>
<title>Diary</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
<style>
.w3-container w3-teal {
   /* background-color: rgb(204, 118, 84); */
}

#head {
   /* background-color: rgb(204, 118, 84); */
}

#right {
   float: right;
}

#content {
   border-radius: 5px;
   border: 2px solid;
   /* background-color: rgb(255, 235, 211); */
   font-size: medium;
   font-family: "Noto Sans KR", sans-serif;
   padding: 2.5em;
}

.btns {
   display: flex;
   width: 100%;
   justify-content: end;
   padding-right: 40px;
}

.btn {
   padding: 0.5em;
   margin: 0 8px;
   border: solid 3px bisque;
   /* background-color: rgb(255, 245, 234); */
   border-radius: 10px;
}

.btn:hover {
   /* background-color: rgb(255, 196, 132); */
   cursor: pointer;
}

button[type="submit"] {
   margin-right: 50px;
}

.regdate {
   font-size: smaller;
}

table {
   width: 100%;
}

.title {
   font-size: 3.5em;
   color: white;
   margin-left: 30px;
}

.header {
   display: flex;
   align-items: center;
   justify-content: space-between;
   /* background-color: rgb(130, 178, 187); */
   padding:1em;
}

.buttons {
   margin-right: 30px;
}

td {
   /* background-color: rgb(118, 175, 92); */
   margin: 10px;
   /* color: white; */
   text-align: center;
   width: 150px;
   padding: 10px;
}

#bottom {
   margin-top: 3.5em;
}

#main {
   border: solid black 2px;
   padding: 2em 2em 2em 2em;
}
</style>
</head>
<script>
</script>
<body>
   <div class="header">
      <h1> Share Daily Life</h1>
   </div>

   <div class="w3-content">
      <form action="add_ok.php" method ="get">
         <div class="w3-row w3-margin">
            <div class="w3-container" id="content">
               title: <textarea name="title" rows="1" cols="25"></textarea>
               weather: <textarea name="weather" rows="1" cols="15"></textarea>
               usr_name: <textarea name="usr_name" rows="1" cols="15"></textarea>
            </div>
            <textarea name="diary" rows="10" cols="75"></textarea>
            <button type="submit">저장</button>       
         </div>
   </form>
   </div>
</body>
</html>