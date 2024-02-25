/*playlist autoplay*/

var playlist = ['videos/bandLowerBodyWorkout.mp4', 'videos/5minTricepsBuilding.mp4', 'videos/10minIsometricCoreWorkout.mp4'];
var myindex = 1;

window.onload = function() {
    myvideo.onended = function() {
        this.src = playlist[myindex];
        myindex = (myindex + 1)%playlist.length;
    }
}