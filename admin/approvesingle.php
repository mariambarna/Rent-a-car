<style>
    
    table{
        color: black;
        margin-top:25px;
        margin-left:25px;
    }
    h2{
        color: black;
    }
    /* .pic{
        height:200px ;
        width: 200px;

    } */
    td img{
        height: 60px;
        width: 60px;

    }
.col-12{
  
padding-left: 2%;
  width: 100%;
}

   

</style>


<form action="approveserver.php" method="post">
    <label for="">ID</label>
    <input type="text" class="form-control" readonly name="id" value="<?php echo $_GET['id']?>">
    <label for="">Fare</label>
    <input type="number" step="0.2" name="fare" class="form-control">
    <button type="submit"> Approve</button>
</form>
 
  