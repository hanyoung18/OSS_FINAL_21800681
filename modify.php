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
<body>
   <div class="header">
      <h1> Modify Diary</h1>
   </div>
   <div class="w3-content">
   <form action="modify_ok.php" method ="get">
         <div class="w3-row w3-margin">
            <input type="hidden" name="seq" value= <?php echo $_GET['seq'];?>>
               <div class="w3-container" id="content">
                  title: <textarea name="title" rows="1" cols="25"><?php echo $_GET['title'];?></textarea>
                  weather: <textarea name="weather" rows="1" cols="15"><?php echo $_GET['weather']; ?></textarea>
                  usr_name: <textarea name="usr_name" rows="1" cols="15" ><?php echo $_GET['usr_name'];?></textarea>
               </div>
            <textarea name="diary" rows="10" cols="75"><?php echo $_GET['diary']; ?></textarea>
            <button type="submit">수정</button>       
         </div>
   </form>
   </div>
</body>
</html>