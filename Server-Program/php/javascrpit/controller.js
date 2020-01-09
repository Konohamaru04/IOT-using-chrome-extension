
        function lightcontroller(lightBulb)
        {
            var lightSprite = "/sprites/off.png";

            if(lightBulb == 1)
            {
                lightSprite = "/sprites/on.png";
            }
            if(lightBulb == 0)
            {
                lightSprite = "/sprites/off.png";
            }
            document.getElementById("light").src=lightSprite;
        }

        function tvcontroller(tv69)
        {
            var tvSprite = "/sprites/tvoff.png";

            if(tv69 == 1)
            {
                tvSprite = "/sprites/tvon.png";
            }
            if(tv69 == 0)
            {
                tvSprite = "/sprites/tvoff.png";
            }
            document.getElementById("tv").src=tvSprite;
        }

        function fancontroller(fananim)
        {

            if(fananim == 1)
            {
                fanSprite = "rotateON";
                document.getElementById("fan").classList.remove("rotateOff");
                document.getElementById("fan").classList.add(fanSprite);
            }
            if(fananim == 0)
            {
                fanSprite = "rotateOff";
                document.getElementById("fan").classList.remove("rotateON");
                document.getElementById("fan").classList.replace(fanSprite)
            }
        }
       
    