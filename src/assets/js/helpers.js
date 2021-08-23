// Restrict Number to Min/Max Range
function clamp(min, max, val) {
    return Math.min(Math.max(min, +val), max);
}
