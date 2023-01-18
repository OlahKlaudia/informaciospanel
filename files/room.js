import rooms from './rooms.js';

const TIMEOUT_TTL = 10; // in seconds
const FRAME_PER_SECOND = 60;

const input = document.getElementById('input');
const floorParagraph = document.getElementById('floor');
const roomParagraph = document.getElementById('room');
const floorCanvas = document.getElementById('floor-canvas');
const floorCanvasContext = floorCanvas.getContext('2d');
let interval = null;
let timeout = null;

input.focus();

const reset = () => {
  clearTimeout(timeout);
  clearInterval(interval);

  floorCanvasContext.canvas.width = 0;
  floorCanvasContext.canvas.height = 0;

  floorParagraph.innerHTML = 'Floor: -';
  roomParagraph.innerHTML = 'Room: -';

  input.value = '';
  input.focus();
};

document.getElementById('reset').onclick = () => {
  reset();
};

document.getElementById('input-form').onsubmit = (formSubmitEvent) => {
  formSubmitEvent.preventDefault();

  input.focus();

  const room = rooms.find((room) => String(room.id) === input.value.toLowerCase());

  if (!room) {
    return alert('This room not found!');
  }

  clearTimeout(timeout);
  clearInterval(interval);

  const { floor: roomFloor, path: roomPath } = room;
  const floorImageSrc = `./floors/floor_${roomFloor}.png`;
  const floorImage = new Image();

  floorParagraph.innerHTML = `Floor: ${String(roomFloor).replace('_', ' ')}`;
  roomParagraph.innerHTML = `Room: ${String(room.id).toUpperCase()}`;

  floorCanvas.style.backgroundImage = `url(${floorImageSrc})`;

  floorImage.onload = () => {
    const { width, height } = floorImage;

    floorCanvasContext.canvas.width = width;
    floorCanvasContext.canvas.height = height;

    let roomPathIndex = 0;
    let roomPathX = roomPath[0].x;
    let roomPathY = roomPath[0].y;

    const draw = () => {
      floorCanvasContext.clearRect(0, 0, width, height);

      floorCanvasContext.strokeStyle = '#0093DD';
      floorCanvasContext.lineWidth = 3;
      floorCanvasContext.beginPath();
      floorCanvasContext.moveTo(roomPath[0].x, roomPath[0].y);
      for (let i = 1; i < roomPath.length; i++) {
        floorCanvasContext.lineTo(roomPath[i].x, roomPath[i].y);
      }
      floorCanvasContext.stroke();

      floorCanvasContext.fillStyle = "#FF0000";
      floorCanvasContext.beginPath();
      floorCanvasContext.arc(roomPathX, roomPathY, 5, 0, 2 * Math.PI);
      floorCanvasContext.fill();

      if (roomPathX < roomPath[roomPathIndex + 1].x) {
        roomPathX += 1;
      } else if (roomPathY < roomPath[roomPathIndex + 1].y) {
        roomPathY += 1;
      } else if (roomPathX > roomPath[roomPathIndex + 1].x) {
        roomPathX -= 1;
      } else if (roomPathY > roomPath[roomPathIndex + 1].y) {
        roomPathY -= 1;
      } else {
        if (++roomPathIndex >= roomPath.length - 1) {
          roomPathIndex = 0;
          roomPathX = roomPath[0].x;
          roomPathY = roomPath[0].y;
        }
      }
    }

    timeout = setTimeout(reset, 1000 * TIMEOUT_TTL);
    interval = setInterval(draw, Math.round(1000 / FRAME_PER_SECOND));
  };
  floorImage.src = floorImageSrc;
};
