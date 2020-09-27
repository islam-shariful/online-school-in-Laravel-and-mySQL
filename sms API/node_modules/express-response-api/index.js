// 'status'
// ['status', 'code']
function fill(obj, keys, data) {
  if (!keys) return;
  keys = Array.isArray(keys) ? keys : [keys];
  for (var i = 0; i < keys.length - 1; i++) {
    obj = obj[keys[i]] = obj[keys[i]] || {};
  }
  obj[keys[keys.length - 1]] = data;
}

// api(code, message, data)
// api(code, message)
// api(code, data)
// api(code)
// api(data)
// api()
exports = module.exports = function(option) {
  option = option || {};
  var format = option.format;
  var success = option.success || 0; // success code
  var messages = option.messages || {};
  return function api(req, res, next) {
    res.api = (code, message, data) => {
      if (typeof code === 'undefined') {
        code = success;
      } else if (typeof code !== 'number') {
        data = code;
        code = success;
      } else if (typeof message !== 'undefined' && typeof message !== 'string') {
        data = message;
        message = undefined;
      }
      code = typeof code === 'number' ? code : success;
      message = message || messages[code] || '';
      data = typeof data !== 'undefined' ? data : {};
      if (typeof format === 'function') {
        res.json(format(code, message, data));
      } else if (format) {
        var result = format.result ? new format.result : {};
        fill(result, format.code, code);
        fill(result, format.message, message);
        fill(result, format.data, data);
        res.json(result);
      } else {
        res.json([code, message, data]);
      }
    };
    next();
  }
};

var MESSAGES = {};
exports.standard = function(req, res, next) {
  res.api = (code, message, data) => {
    if (typeof code === 'undefined') {
      code = success;
    } else if (typeof code !== 'number') {
      data = code;
      code = success;
    } else if (typeof message !== 'undefined' && typeof message !== 'string') {
      data = message;
      message = undefined;
    }
    code = typeof code === 'number' ? code : success;
    message = message || MESSAGES[code] || '';
    data = typeof data !== 'undefined' ? data : {};
    res.json([code, message, data]);
  };
  next();
};

exports.config = {
  message: function(messages) {
    MESSAGES = messages || {};
  }
};