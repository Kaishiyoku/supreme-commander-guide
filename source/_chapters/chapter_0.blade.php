---
title: "Chapter 0"
subTitle: "What is this guide?"
---

@extends('_layouts.chapter')

@section('body')
    <h1>Chapter 0</h1>

    <h2>What is this guide?</h2>

    <p>
        Hello! And welcome to this unofficial Forged Alliance guide.
    </p>

    <p>
        Presumably like you, I’m a player of the game Supreme Commander Forged Alliance.
        I liked this game so much that I decided some months ago to begin this guide.
        What is it about?
        Unlike most of the strategy guides you can find on the web, this one focuses on the underlying maths of the game, a perfectly suiting approach to discuss economic matters, which are probably even more important than war itself in SupCom.
        This guide is less based on game experience than on mathematics.
        I wrote it both for beginners and experienced players, although an already good knowledge of the game can help you better understand my analyses.
        Please read this small chapter before anything else.
    </p>

    <h3>0.1 What can you learn from this guide?</h3>

    <p>
        Playing all days, all nights.
        Still being beaten almost every time.
        How many games do you need to play before you become a better player?
        The basic idea to become good is to learn and the basic idea to learn is to play.
        A lot.
        In your first games, you don't know T1 power plants are the less cost-effective way of producing energy.
        But after 20 games you finally manage to understand T3 power plants are the best way to produce energy.
        In your first games, you don't know T2 mass fabricators cannot be built in groups.
        But after your whole main base exploded, you get it.
        In your first games you don't know some T1 land units are incredibly mobile in comparison of others, but after having lost your entire army because of this “looking irrelevant aspect”, you get it as well.
        This is what game experience is.
        Each game you make help you understand what you must do and what you must avoid.
        Each game you make help you see the weakness of your current game behaviour and help you fix it.
    </p>

    <p>
        Playing a lot is the best way to become good.
        This is something impossible to deny, but rather than trying to learn something by making mistakes, why can't we just use our brain?
        This is what this guide is about.
        It is not based on much game experience.
        It is based on mathematical arguments instead.
        But the result is pretty much the same.
        Here is the fact : most of the things you can learn by playing the game can be demonstrated by using mathematics.
        By just performing some easy maths, you can learn in less than one day what most of the players learn after weeks!
        But this is not the most interesting part of this guide.
        There is something that even the best players forget : some subtleties of the game are impossible to catch by using blind empiricism.
        Only pure mathematics can reveal them, as you will discover throughout the next chapters.
    </p>

    <p>
        However, you should never forget all players aren't equal.
        Saying you can be as good as the current best player of the game if you take enough time to play/learn a lot is just as silly as saying you can be as good as Einstein if you read enough physics books.
        Some players are better than others, simply because they are born that way.
        Reading this guide and others on the web, playing a lot and discussing strategies with other players will not lead you to become the best player of the game.
        It will help you reach your own limit, nothing more.
    </p>

    <h3>0.2 A Forged Alliance guide only...</h3>

    <p>
        One thing you should be aware of, is that Supreme Commander and Supreme Commander Forged Alliance <em>don't work the same way</em>.
        What is true about Supreme Commander, may be completely obsolete in Forged Alliance and vice versa.
        So if you are a player of Supreme Commander, not Forged Alliance, don't forget that what I say in this guide <em>is based on Forged Alliance only</em>.
        You shouldn't try to apply the theory of this guide to Supreme Commander alone.
    </p>

    <p>
        <img src="/assets/images/commander.png" alt="Commander"/>
    </p>

    <h3>0.3 ...taking roots in the SupCom Database</h3>

    <p>
        <a href="http://direct.faforever.com/faf/unitsDB">The SupCom Forged Alliance Database</a> shows a lot of information about every unit available in the game.
        This database is regularly updated by its designer.
        Lots of things in my guide depend directly of this database, you actually can see this guide as taking roots in the SupCom Database.
    </p>

    <div class="alert alert-info">
        <div class="d-flex flex-row">
            <div class="pr-2">
                <a href="http://direct.faforever.com/faf/unitsDB/?id=ueb4202" class="btn btn-outline-dark btn-sm">
                    <img src="/assets/images/icon_structure3_shield_rest.png" style="filter: hue-rotate(227deg)" alt="UEB4202">
                </a>
            </div>

            <div>
                Throughout this guide, you can easily access the specification sheet of the SupCom Forged Alliance Database about a unit by clicking on its icon, like the one on the left here.
                Every time I will analyze a unit in detail, an icon leading to the SupCom Database will be close.
            </div>
        </div>
    </div>

    <p>
        All the data from the SupCom Database is directly extracted from the files of the game.
        It's indeed possible to have a direct access to the parameters of a unit by opening the files of the installed game.
        For instance, the UEF T2 static shield generator costs, according to the SupCom Forged Alliance Database, 600 mass units and 6000 energy units.
        Let's check these values. We simply need to go to “C:\Program Files\THQ\Gas Powered Games\Supreme Commander - Forged Alliance\gamedata”, or similar, depending the way your game is installed on your computer, and then we have to open the file “units.scd” with <em>WinRar</em>.
        I guess other programs can work as well, but WinRAR is just the one I use.
        You will face now a single folder simply named “units”.
        Enter it.
        In here, you have several hundred folders.
        The one related to the UEF T2 static shield generator is named <em>UEB4202</em>.
        Find it and open it.
        Then, open the file “UEF4202_unit.bp” with a simple software for .txt files, like <em>NotePad</em>.
        You then simply have to look in the code.
        Here is, below this paragraph, a capture of the part we are looking for.
        As you can see, the cost of the building is 600 mass units and 6000 energy units.
    </p>

    <p>
        <img src="/assets/images/code.png" alt="UEB4202 code"/>
    </p>

    <h3>0.4 Used mathematics</h3>

    <p>
        <img src="/assets/images/math.png" alt="Math"/>
    </p>

    <p>
        Do not think this guide is too complicated for you just because of the mathematics and graphs.
        I try here to use only mathematics from high school and avoid using derivatives or integrals as much as possible.
        I generally feature the four usual operations only and some logic a player of games like SupCom should have.
        Several parts of the guide already changed because the math involved were too complicated.
        Every time a new section is written, the mathematics of it are worked out to be as clear as possible and as easy as possible.
        Most of the mathematical developments are explained and almost always detailed.
        If by some chance you still do not understand something I did, don't hesitate to mail me, I will be very happy to help you.
    </p>

    <h3>0.5 If you need to contact me</h3>

    <p>
        The last thing I want to tell you before you start reading the next chapters is that I'm not a native english speaker.
        In fact, this website is the first one I wrote in english.
        It's thus undoubtable there will be mispellings, grammatical errors and so on.
        Your help for fixing this is of course welcome!
        Even if you don't want to correct for me the grammar of a whole chapter, just pick up one error and send it to me.
        If all my readers do this, everything will be corrected quite quickly!
        Also, I will always use simple english, from the beginning to the end of the guide, not only because I want everybody who doesn't speak english well can read my work, but also because I'm simply not able to do better.
        So please, be understanding.
        Good reading and good game!
    </p>
@endsection