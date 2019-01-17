
const endpoint = 'http://localhost:8000/graphql';

export const FetchAPI = (query, options = null, variables = null, operationName= null) => {
  return new Promise(function(resolve, reject) {
    fetch(endpoint, {
      method: 'POST',
      mode: 'cors',
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        "query": query,
        "variables": variables,
        "operationName": operationName
      })
    }).then(function (res){
      res.json().then((json) => {
        resolve(json.data.user);
      })
    }.bind(this)).catch((error) => {
      reject(error);
    })
  });
}
