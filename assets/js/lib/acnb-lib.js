"use strict";

const proofClass = (selector, cls) => Array.from(selector.classList).some(item => item.includes(cls));
