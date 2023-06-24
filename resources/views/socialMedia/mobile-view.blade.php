<style>
    :root {
  font-size: min(2vw, 2vh);
  font-family: sans-serif;
}

.mobile-data {
  height: 100vh;
  display: grid;
  place-items: center;
  margin: 0;
}

.device {
  aspect-ratio: 260 / 540;
  width: 15rem;
  
  border: solid 0.7rem black;
  border-radius: 2rem;
  
  position: relative;
  overflow: hidden;
}

.status {
  box-sizing: border-box;
  width: 100%;
  height: 2rem;
  padding: 0 1rem;
  
  display: flex;
  flex-direction: row;
  align-items: center;
}
.status div {
  flex: 1;
  text-align: center;
}
.status .blank {
  flex: 1.5;
}

.floating {
  width: 5rem;
  aspect-ratio: 300 / 90;
  
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  
  margin: 0.5rem 0;
  
  border-radius: 2rem; /* does not really matter */
  background: black;
}
.camera {
  box-sizing: border-box;
  width: 1rem;
  aspect-ratio: 1 / 1;
  
  position: absolute;
  top: 50%;
  right: calc(5rem / 300 * 90 * 0.25); /* center of border radius */
  transform: translateY(-50%);
  
  border-radius: 2rem; /* does not really matter */
  border: solid 0.1rem #121212;
  background: #00021D;
}
.blob {
  position: absolute;
  transform: translate(-50%, -50%);
  
  border-radius: 50%;
}
.white {
  width: 0.5rem;
  aspect-ratio: 14 / 6;
  
  top: 25%;
  left: 50%;
  
  background: white;
  filter: blur(0.1rem);
  opacity: 0.7;
}
.bbg {
  width: 0.5rem;
  aspect-ratio: 15  / 10;
  
  top: 75%;
  left: 50%;
  
  background: #151E9D;
  filter: blur(0.1rem);
}
.green {
  width: 0.2rem;
  aspect-ratio: 7 / 4;
  
  top: 65%;
  left: 65%;
  
  background: #0F7B3A;
  filter: blur(0.05rem);
}
.red {
  width: 0.17rem;
  aspect-ratio: 7 / 4;
  
  top: 80%;
  left: 50%;
  
  background: #D73838;
  filter: blur(0.05rem);
}

.home {
  width: 7rem;
  aspect-ratio: 300 / 15;
  
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  
  margin: 0.3rem 0;
  
  border-radius: 2rem; /* does not really matter */
  background: black;
}
</style>
    <div class="mobile-data">
    <div class="device">
      <div class="status">
        <div class="time">9:41</div>
        <div class="blank"></div>
        <div class="icons">
          <iconify-icon icon="ic:round-signal-cellular-alt" inline></iconify-icon>
          <iconify-icon icon="ic:round-wifi" inline ></iconify-icon>
          <iconify-icon icon="gg:battery-full" inline ></iconify-icon>
        </div>
      </div>
      <div class="floating">
        <div class="camera">
          <div class="blob white"></div>
          <div class="blob bbg"></div>
          <div class="blob green"></div>
          <div class="blob red"></div>
        </div>
      </div>
      
      <div class="home"></div>
    </div>
    </div>