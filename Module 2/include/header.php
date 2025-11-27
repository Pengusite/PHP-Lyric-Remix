<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokéMart PH</title>
</head>
<style>        
    .poke-nav {
        background-color: #3B4CCA; 
        border-bottom: 4px solid #FFDE00; 
        box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        position: sticky; 
        top: 0;
        z-index: 1000;
    }

    .nav-list {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
        flex-wrap: wrap; 
    }

    .nav-item {
        flex: 1; 
        min-width: 100px;
    }

    .nav-link {
        display: block;
        padding: 15px 5px;
        text-align: center;
        text-decoration: none;
        color: white;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 1rem;
        transition: all 0.3s ease;
        border-right: 1px solid rgba(255, 255, 255, 0.1);
    }

    .nav-item:last-child .nav-link { border-right: none; }

    .nav-link:hover {
        background-color: #CC0000; 
        color: #FFDE00; 
        text-shadow: 1px 1px 0px #3B4CCA;
    }   
    </style>
    <nav class="poke-nav">
        <ul class="nav-list">
            <li class="nav-item"><a href="CatanghalJustineChollo-IfElseIf.php" class="nav-link">IF ELSE IF</a></li>
            <li class="nav-item"><a href="CatanghalJustineChollo-Switch.php" class="nav-link">SWITCH</a></li>
            <li class="nav-item"><a href="CatanghalJustineChollo-Match.php" class="nav-link">MATCH</a></li>
            <li class="nav-item"><a href="CatanghalJustineChollo-While.php" class="nav-link">WHILE</a></li>
            <li class="nav-item"><a href="CatanghalJustineChollo-DoWhile.php" class="nav-link">DO WHILE</a></li>
            <li class="nav-item"><a href="CatanghalJustineChollo-ForLoops.php" class="nav-link">FOR LOOPS</a></li>
        </ul>
    </nav>
