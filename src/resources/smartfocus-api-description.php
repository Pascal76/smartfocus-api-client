<?php

return new \GuzzleHttp\Command\Guzzle\Description([
  'baseUrl' => 'https://p8apie.emv3.com/apimember/services/rest/',
  'operations' => [
    'openConnection' => [
      'httpMethod' => 'GET',
      'uri' => 'connect/open/{username}/{password}/{apiKey}',
      'parameters' => [
        'username' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'password' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'apiKey' => [
          'type' => 'string',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
      'errorResponses' => [
        [
          'code' => 500,
          'reason' => 'Unexpected Error',
          'class' => 'string',
        ],
      ],
    ],
    'closeConnection' => [
      'httpMethod' => 'GET',
      'uri' => 'connect/close/{token}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ]
      ],
      'responseModel' => 'defaultOutput',
    ],
    'getTableFields' => [
      'httpMethod' => 'GET',
      'uri' => 'member/descMemberTable/{token}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ]
      ],
      'responseModel' => 'defaultOutput',
    ],
    'getMembers' => [
      'httpMethod' => 'POST',
      'uri' => 'member/getMembers/{token}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'memberUID' => [
          'type' => 'string',
          'location' => 'xml',
        ],
      ],
      'data' => [
        'xmlEncoding' => 'UTF-8',
        'xmlRoot' => [
          'name' => 'synchroMember',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'getMemberByEmail' => [
      'httpMethod' => 'GET',
      'uri' => 'member/getMemberByEmail/{token}/{email}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'email' => [
          'type' => 'string',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'getMemberByCellphone' => [
      'httpMethod' => 'GET',
      'uri' => 'member/getMemberByCellphone/{token}/{cellphone}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'cellphone' => [
          'type' => 'string',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'getMemberById' => [
      'httpMethod' => 'GET',
      'uri' => 'member/getMemberById/{token}/{id}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'id' => [
          'type' => 'string',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'update' => [
      'httpMethod' => 'GET',
      'uri' => 'member/update/{token}/{email}/{fieldName}/{fieldValue}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'email' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'fieldName' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'fieldValue' => [
          'type' => 'string',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'updateMember' => [
      'httpMethod' => 'POST',
      'uri' => 'member/updateMember/{token}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'memberUID' => [
          'type' => 'string',
          'location' => 'xml',
        ],
        'dynContent' => [
          'type' => 'array',
          'items' => [
            'name' => 'entry',
            'type' => 'object',
            'properties' => [
              'key' => [],
              'value' => [],
            ],
          ],
          'location' => 'xml',
        ],
      ],
      'data' => [
        'xmlEncoding' => 'UTF-8',
        'xmlRoot' => [
          'name' => 'synchroMember',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'insert' => [
      'httpMethod' => 'GET',
      'uri' => 'member/insertMember/{token}/{email}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'email' => [
          'type' => 'string',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'insertMember' => [
      'httpMethod' => 'POST',
      'uri' => 'member/insertMember/{token}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'dynContent' => [
          'type' => 'array',
          'items' => [
            'name' => 'entry',
            'type' => 'object',
            'properties' => [
              'key' => [],
              'value' => [],
            ],
          ],
          'location' => 'xml',
        ],
      ],
      'data' => [
        'xmlEncoding' => 'UTF-8',
        'xmlRoot' => [
          'name' => 'synchroMember',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'insertOrUpdateMember' => [
      'httpMethod' => 'POST',
      'uri' => 'member/insertOrUpdateMember/{token}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'memberUID' => [
          'type' => 'string',
          'location' => 'xml',
        ],
        'dynContent' => [
          'type' => 'array',
          'items' => [
            'name' => 'entry',
            'type' => 'object',
            'properties' => [
              'key' => [],
              'value' => [],
            ],
          ],
          'location' => 'xml',
        ],
      ],
      'data' => [
        'xmlEncoding' => 'UTF-8',
        'xmlRoot' => [
          'name' => 'synchroMember',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'unjoinByEmail' => [
      'httpMethod' => 'GET',
      'uri' => 'member/unjoinByEmail/{token}/{email}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'email' => [
          'type' => 'string',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'unjoinByCellphone' => [
      'httpMethod' => 'GET',
      'uri' => 'member/unjoinByCellphone/{token}/{cellphone}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'cellphone' => [
          'type' => 'string',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'unjoinById' => [
      'httpMethod' => 'GET',
      'uri' => 'member/unjoinById/{token}/{id}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'id' => [
          'type' => 'number',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'unjoinMember' => [
      'httpMethod' => 'POST',
      'uri' => 'member/unjoinMember/{token}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'memberUID' => [
          'type' => 'string',
          'location' => 'xml',
        ]
      ],
      'data' => [
        'xmlEncoding' => 'UTF-8',
        'xmlRoot' => [
          'name' => 'synchroMember',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'rejoinByEmail' => [
      'httpMethod' => 'GET',
      'uri' => 'member/rejoinByEmail/{token}/{email}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'email' => [
          'type' => 'string',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'rejoinByCellphone' => [
      'httpMethod' => 'GET',
      'uri' => 'member/rejoinByCellphone/{token}/{cellphone}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'cellphone' => [
          'type' => 'string',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'rejoinById' => [
      'httpMethod' => 'GET',
      'uri' => 'member/rejoinByMemberId/{token}/{id}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'id' => [
          'type' => 'number',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
    'getMemberJobStatus' => [
      'httpMethod' => 'GET',
      'uri' => 'member/getMemberJobStatus/{token}/{synchroId}',
      'parameters' => [
        'token' => [
          'type' => 'string',
          'location' => 'uri',
        ],
        'synchroId' => [
          'type' => 'number',
          'location' => 'uri',
        ],
      ],
      'responseModel' => 'defaultOutput',
    ],
  ],
  'models' => [
    'defaultOutput' => [
      'type' => 'object',
      'location' => 'xml',
      'additionalProperties' => [
        'location' => 'xml',
      ],
    ],
    'getMembersOutput' => [
      'type' => 'array',
      'items' => [
        'object' => [
          'properties' => [
            'members' => [
              'location' => 'xml',
            ],
          ],
        ],
      ],
      'location' => 'xml',
      'additionalProperties' => [
        'location' => 'xml',
      ],
    ]
  ],
]);