#Zemose API (v1)

_(*) Specifies required fields._

###G. getRequests
####METHOD : POST
####Arguments
1. userId* - User ID for the Zemoser

####Return Status
| Status Code        | Status           |Return                     |
| ------------------|:---------------:| -----------------------:|
| 4G100              | Success          |   List<Orders> orders    |
| 4G201              | No User ID       |   null                    |

####Example Response
```json
{
  "ZemoseStatus": {
    "StatusCode": "4G100",
    "Status": "Success"
  },
  "data": {
    "orders": [
      {
        "id": "10",
        "fromDate": "2016-11-10 00:00:00",
        "toDate": "2016-11-10 10:00:00",
        "orderCode": "ZOIN0010",
        "amount": "2550",
        "status": "0",
        "rentPrice": "100",
        "rentFor": "10",
        "rentTerm": "Hour",
        "skillTerm": null,
        "skillFor": "0",
        "skillPrice": "0",
        "inventory": {
          "id": "25",
          "product": {
            "id": "16",
            "zuin": "ZUID4558",
            "name": "HJ TOOL",
            "image": "https://zemose.dev/static/content/product-images/13298223_1032593813498705_1744672247_n.jpg"
          }
        },
        "personal": {
          "email": "sabeersulaiman@outlook.com",
          "phone": "8893979247",
          "firstName": "Saleem",
          "lastName": "Muhammed",
          "profilePicture": ""
        },
        "address": {
          "name": "Saleem Sulaiman",
          "streetaddress": "Hey Address",
          "city": "New Orleans, LA, United States",
          "lat": "29.951065",
          "lon": "-90.071533",
          "pin": "345321",
          "phone": "2147483647"
        }
      }
    ]
  }
}
```

###H. requestAction
####METHOD : POST
####Arguments
1. userId* - _User ID for the Zemoser_
2. orderId* - _Order ID_
3. action* - _Action_
⋅⋅* Possible values
...* accept
...* reject

####Return Status
| Status Code        | Status           |Return                     |
| ------------------|:---------------:| -----------------------:|
| 4H100              | Success          |   true / false    |
| 4H201              | No User ID       |   null                    |
| 4H202              | No Order ID      |   null                    |
| 4H203              | No valid Action  |   null                    |
| 4H204              | Not Authorized   |   null                    |

####Example Response
```json
{
  "ZemoseStatus": {
    "StatusCode": "4H100",
    "Status": "Success"
  },
  "data": true
}
```