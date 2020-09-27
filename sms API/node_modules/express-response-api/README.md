# express-response-api
JSON API response format for Express

## Usage
```js
const responseApi = require('express-response-api');
app.use(responseApi(/*option*/));
router.get('/api', (req, res) => {
  res.api({
    id: 0
  });
});
```

## Option
```js
responseApi({
  format: {
    result: Object, // undefined/Object/Array
    code: ['status', 'code'], // Array key path
    message: ['status', 'msg'], // Array key path
    data: 'data' // String key path
  },
  success: 1, // Success code
  messages: {
    1: 'Success' // Response code message map
  }
});
res.api({id: 1}); // { status: { code: 1, msg: 'Success' }, data: {id: 1} }
```

```js
responseApi({
  format: function(code, message, data) {
    return {
      code: code,
      message: message,
      data: data
    };
  },
  success: 1, // Success code
  messages: {
    1: 'Success' // Response code message map
  }
});
res.api({id: 1}); // { code: 1, message: 'Success', data: {id: 1} }
```

## Examples
```js
const code = 1; // Error Code
const message = 'Response Message';
const data = { id: 0 };

// Full Args
res.api(code, message, data); // [1, 'Response Message', { id: 0 }]

// Success Response
res.api(data); // [0, '', { id: 0 }]
res.api(); // [0, '', {}];

// Success/Error Response
res.api(code, message); // [1, 'Response Message', {}]
res.api(code, data); // [1, '', { id: 0 }]
res.api(code); // [1, '', {}]
```