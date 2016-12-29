<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>SYNTHETIC CSS</title>
    <link rel="stylesheet" href="assets/front.css">

    <!-- <script type="text/javascript"  src="assets/jquery/jquery-3.1.1.js"></script>
    <script type="text/javascript"  src="assets/waves/waves.js"></script> -->

</head>
<style>
    .grid .ex{
        
        /* padding-top: 10px; */
        /* padding-bottom: 10px; */
    }

    .nobg > .col{
        background: none !important;
    }

    .col:not(.head){
        background: rgba(0,0,0,0.2);
        border: 1px solid #fff;
    }

    .row{
        margin-bottom: 10px;
    }

</style>

<script type="text/javascript">
    // $(document).ready(function(){
    //     Waves.init();
    //     Waves.attach('.btn-waves');
    // });

</script> 


<body>


<div class="container grid">
    <br>
    <div class="row">        
        <div class="col head l-12 m-12 s-12">
            <h1>COLUMN WITH FLOAT</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col float l-12 m-12 s-12">.col.float.l-12</div>        
    </div>

    <div class="row">
        <div class="col float l-6 m-6 s-12">.col.float.l-6</div>
        <div class="col float l-6 m-6 s-12">.col.float.l-6</div>
    </div>

    <div class="row">
        <div class="col float l-4 m-4 s-12">.col.float.l-4</div>
        <div class="col float l-4 m-4 s-12">.col.float.l-4</div>
        <div class="col float l-4 m-4 s-12">.col.float.l-4</div>
    </div>

    <div class="row">
        <div class="col float l-3 m-3 s-12">.col.float.l-3</div>
        <div class="col float l-3 m-3 s-12">.col.float.l-3</div>
        <div class="col float l-3 m-3 s-12">.col.float.l-3</div>
        <div class="col float l-3 m-3 s-12">.col.float.l-3</div>
    </div>
</div>

<div class="container grid">
    <hr>
    <br>
    <div class="row">
        <div class="col head l-12 m-12 s-12">
            <h1>COLUMN WITH INLINE-BLOCK</h1>        
        </div>
    </div>
    
    <div class="row inline">
        <div class="col inline l-12 m-12 s-12">.col.inline.l-12</div>
    </div>
    <div class="row inline">
        <div class="col inline verti-inline l-6 m-12 s-12">.col.inline.l-6</div>
        <div class="col inline verti-inline l-6 m-12 s-12">
            .col.inline.l-6 <br>
            .col.inline.l-6 <br>
            .col.inline.l-6 <br>
            .col.inline.l-6 <br>
            .col.inline.l-6 <br>
            .col.inline.l-6 <br>
        </div>
    </div>
</div>

<div class="container grid">
    <hr>
    <br>
    <div class="row">
        <div class="col head l-12 m-12 s-12">
            <h1>COLUMN WITH TABLE CELL</h1>        
        </div>
    </div>
    <!-- <div class="col l-12 m-12 s-12"> -->
        <div class="row">
            <div class="row table">
                <div class="col table l-12 m-12 s-12">.col.table.l-12</div>
            </div>
        </div>
    <!-- </div> -->
    <!-- <div class="col l-12 m-12 s-12"> -->
        <div class="row">
            <div class="row table">
                <div class="col table l-6 m-6 s-12">.col.table.l-6</div>
                <div class="col table l-6 m-6 s-12">
                    .col.table.l-6 <br>
                    .col.table.l-6 <br>
                    .col.table.l-6 <br>
                    .col.table.l-6 <br>
                    .col.table.l-6 <br>
                </div>
            </div>
        </div>
    <!-- </div> -->
</div>


<div class="container">
    <br>
    <hr>
    <br>
    <div class="row">
        <div class="col head l-12 m-12 s-12">
            <h1>FORM INLINE WITH LABEL & WITHOUT LABEL</h1>        
        </div>
    </div>

    <div class="row nobg">
        <div class="col l-12 m-12 s-12">
            <div class="form-group">
                <div class="form-inline l-4">
                    <input type="text">
                </div>
                <div class="form-inline l-4">
                    <input type="text">
                </div>
                <div class="form-inline l-4">
                    <input type="text">
                </div>
            </div>
        </div>
        
        <br>
        
        <div class="col l-12 m-12 s-12">
            <div class="form-group">
                <div class="form-inline l-4">
                    <label for="">Username</label>
                    <input type="text">
                </div>
                <div class="form-inline l-4">
                    <label for="">Password</label>
                    <input type="text">
                </div>
                <div class="form-inline l-4">
                    <label for="">Email</label>
                    <select name="" id="">
                        <option value="">-- Email --</option>
                    </select>
                </div>
            </div>
        </div>

        <br>
        
        <div class="col l-12 m-12 s-12">
            <div class="form-group">
                <div class="form-inline l-6">
                    <label for="" class="float l-3">Username</label>
                    <div class="float l-9">                    
                        <input type="text">
                    </div>
                </div>
                <div class="form-inline l-6">
                    <label for="" class="float l-3">Password</label>
                    <div class="float l-9">                    
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="col l-12 m-12 s-12 nobg">
            <div class="form-group">
                <div class="form-inline l-3">
                    <label for="">Gender</label>
                    <div class="radio">
                        <label for="a">
                            <input type="radio" id="a" name="c">
                            Men
                        </label>
                    </div>

                    <div class="radio">
                        <label for="b">
                            <input type="radio" id="b" name="c">
                            Women
                        </label>
                    </div>
                </div>

                <div class="form-inline l-3">
                    <label for="">Gender</label>
                    <div class="checkbox">
                        <label for="as">
                            <input type="checkbox" id="as" name="cs">
                            Men
                        </label>
                    </div>

                    <div class="checkbox">
                        <label for="bs">
                            <input type="checkbox" id="bs" name="cs">
                            Women
                        </label>
                    </div>
                </div>

                <div class="form-inline l-3">
                    <label for="">Gender</label>
                    <div class="radio-inline">
                        <label for="e">
                            <input type="radio" id="e" name="d">
                            Men
                        </label>
                    </div>

                    <div class="radio-inline">
                        <label for="f">
                            <input type="radio" id="f" name="d">
                            Women
                        </label>
                    </div>
                </div>

                <div class="form-inline l-3">
                    <label for="">Gender</label>
                    <div class="checkbox-inline">
                        <label for="asw">
                            <input type="checkbox" id="asw" name="csw">
                            Men
                        </label>
                    </div>

                    <div class="checkbox-inline">
                        <label for="bsw">
                            <input type="checkbox" id="bsw" name="csw">
                            Women
                        </label>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <br>
    <hr>
    <br>
    <br>

    <div class="row">
        <div class="col head l-12 m-12 s-12">
            <h1>FORM ONELINE WITH LABEL</h1>
        </div>        
    </div>

    <div class="row nobg">
        <div class="col l-12 m-12 s-12">
            <div class="form-group">
                <div class="form-oneline">                
                    <label for="username">Username</label>
                    <input type="text" id="username">
                </div>
            </div>
        </div>
        <div class="col l-12 m-12 s-12">
            <div class="form-oneline">                
                <label for="password">Password</label>
                <input type="text" id="password">
            </div>
        </div>        
    </div>

</div>


<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col head l-12 m-12 s-12">
            <h1>BUTTON</h1>                
        </div>
    </div>

    <div class="row nobg">
        <div class="col l-12 m-12 s-12">
            <button type="button" class="btn-default uppercase">Submit Uppercase</button>
        </div>
    </div>

    <div class="row nobg">
        <div class="col l-12 m-12 s-12">
            <button type="button" class="btn-default block uppercase">Submit Block Uppercase</button>
        </div>
    </div>

    <br>
    <br>
    <div class="row">
        <div class="col head l-12 m-12 s-12">
            <h1>BUTTON SHADOW WAVES EFFECT</h1>                
        </div>
    </div>

    <div class="row nobg">
        <div class="col l-12 m-12 s-12">
            <button type="button" class="btn-default btn-waves block uppercase depth-1">Submit Block Uppercase</button>
        </div>
    </div>



    <br>
    <br>
    <div class="row">
        <div class="col head l-12 m-12 s-12">
            <h1>BUTTON SHADOW</h1>                
        </div>
    </div>

    <div class="row nobg">
        <div class="col float l-2 m-2 s-12">            
            <button type="button" class="btn-default uppercase depth-0">Button Shadow</button>
        </div>
        <div class="col float l-2 m-2 s-12">            
            <button type="button" class="btn-default uppercase depth-1">Button Shadow</button>
        </div>
        <div class="col float l-2 m-2 s-12">            
            <button type="button" class="btn-default uppercase depth-2">Button Shadow</button>
        </div>
        <div class="col float l-2 m-2 s-12">            
            <button type="button" class="btn-default uppercase depth-3">Button Shadow</button>
        </div>
        <div class="col float l-2 m-2 s-12">            
            <button type="button" class="btn-default uppercase depth-4">Button Shadow</button>
        </div>
        <div class="col float l-2 m-2 s-12">            
            <button type="button" class="btn-default uppercase depth-5">Button Shadow</button>
        </div>
    </div>

    <br>
    <br>
    <div class="row">
        <div class="col head l-12 m-12 s-12">
            <h1>BUTTON SHADOW RADIUS</h1>   
        </div>             
    </div>

    <div class="row nobg">
        <div class="col float l-2 m-6 s-12">            
            <button type="button" class="btn-m radius btn-default uppercase">Button Shadow Radius</button>
        </div>
        <div class="col float l-2 m-6 s-12">            
            <button type="button" class="btn-m radius btn-default uppercase">Button Shadow Radius</button>
        </div>
        <div class="col float l-2 m-6 s-12">            
            <button type="button" class="btn-m radius btn-default uppercase">Button Shadow Radius</button>
        </div>
        <div class="col float l-2 m-6 s-12">            
            <button type="button" class="btn-m radius btn-default uppercase">Button Shadow Radius</button>
        </div>
        <div class="col float l-2 m-6 s-12">            
            <button type="button" class="btn-m radius btn-default uppercase">Button Shadow Radius</button>
        </div>
        <div class="col float l-2 m-6 s-12">            
            <button type="button" class="btn-m radius btn-default uppercase">Button Shadow Radius</button>
        </div>
    </div>

    <br>
    <br>
    <div class="row">
        <div class="col head l-12 m-12 s-12">
            <h1>CARD</h1>                
        </div>
    </div>

    <div class="row nobg">
        <div class="col float l-4 m-4 s-12">
            <div class="card" style="height:200px;padding: 20px;">
                <h1>CARD 1</h1>
            </div>
        </div>
        <div class="col float l-4 m-4 s-12">
            <div class="card" style="height:200px;padding: 20px;">
                <h1>CARD 2</h1>
            </div>
        </div>
        <div class="col float l-4 m-4 s-12">
            <div class="card" style="height:200px;padding: 20px;">
                <h1>CARD 3</h1>
            </div>
        </div>
    </div>

    <br>
    <br>
    <div class="row">
        <div class="col head l-12 m-12 s-12">
            <h1>CARD RADIUS</h1>            
        </div>    
    </div>

    <div class="row nobg">
        <div class="col float l-4 m-4 s-12">
            <div class="card radius" style="height:200px;padding: 20px;">
                <h1>CARD 1</h1>
            </div>
        </div>
        <div class="col float l-4 m-4 s-12">
            <div class="card radius" style="height:200px;padding: 20px;">
                <h1>CARD 2</h1>
            </div>
        </div>
        <div class="col float l-4 m-4 s-12">
            <div class="card radius" style="height:200px;padding: 20px;">
                <h1>CARD 3</h1>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
</div>


<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col head l-12 m-12 s-12">
            <h1>FONT AWESOME</h1>                
        </div>
    </div>

    <div class="row nobg">
        <div class="col l-12 m-12 s-12">
            <i class="fa fa-user"></i>
        </div>
    </div>
</div>

</body>
</html>