// Restrict Number to Min/Max Range
function clamp(min, max, val) {
    return Math.min(Math.max(min, +val), max);
}

function capitalizeTxt(txt) {
    return txt.charAt(0).toUpperCase() + txt.slice(1);
}

module.exports = {
    clamp,
    capitalizeTxt
}