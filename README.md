# Project 5 - Encryption

Time spent: 14 hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [*]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [*]  Required: Decrypt the government message
  * [*]  Required: Encrypt a response and include in this README
  message: I heard about your current situation. Do you know who hacked APEX? -- The Chairman

3\. Generate Public-Private Keys
  * [*]  Required: Repair the key generator code
  * [*]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [*]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [*]  Required: Repair the create and verify signature code
  
6\. Encrypted Message 2
  * [*]  Required: Decrypt the message
  * [*]  Required: Verify the message
  * [*]  Required: Include a response message in this README
  message: 
  body:
  jDn2Ky3H7g5sDwlm0HpKkwDDwR48xuxeh5cUONhu0wfBBOfxgE+l/vNOYGtywVsfDY5kb47S88QlFVlebf/IbQGbYPRxnjdJAG9IS/AQFwOzCfD+z+9ODfX2tPBajf++WTBLPzc9IGOnRB/ejIu8yeaJknxKghnqz5d3Xz4vpSSy1HUcPFYxiIjTBZPtBu8Lh2lIEg9Raliqry2Cg46VZSeKdbGhBUyJjgbGndbDKTzHN+81d6iA1qeyDU7KfCdEMXYwiud0iNAC9lDcX6ipE4Y76s0vWDw9jbg70un+X0ILPrjKwWRGi5GvNbkES251aVvXAlfKPeHSDRKeA/rPpQ==
  signature:
  LEv5JGHjcLwih3TE5NSc43nt5ppLgYmQxDkGnN6/hsxSLOJNnBgHhSd+iImCkJgkvN0TqbC9fJiJ1WcP5EIroOp3fKuDQsj647AjErpHN3EUtJosM22QVcbuHJM3 sTVOPpPF1R5bzUS1mISWC+DcK74w7Skjm//j384opqITG8MQ6qNw+NJeB02mbYwyfv8UqwvAKJAtjXQVCvv91JzauL3ERMRJW7VZjHXwE0nBLTw7H5sQcG0iIL5j4lz0z1RS55RnEiD+Xo6ufNoC93r8a5OOMXmMflCBXv6zTq64yd30Bx2vAmq6Zdjs00q+c+E/LxDSV2zT15PGcnf6T3/r1Q==
  
  
7\. Agent Messages
  * [*]  Required: Repair the dropbox code
  * [*]  Required: Repair the messages area
  * [*]  Required: Display encrypted messages for all agents
  * [*]  Required: Messages indicate whether the message signature is valid
  * [*]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [*]  Required: Decrypt as many email messages as possible
  * [*]  Required: Identify the double agent: austinpowers

The following objectives are **optional**:

* Bonus Objective 1\.
  * [*]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [*]  Write a report of your discoveries (longer than 300 characters).
  * [*]  Compose a secure email for sending over an insecure network.
  * [*]  Include the email with your encrypted report in this README.
  body:
  first half:
  hlt/m+w9RR3va6QBaZRvgtPzHNcOjSUGeIYa2RAdPyMwxwj8qUvTBYt4QJtihRMJOgMWgMsRENCMJ/FutEOOSrCVEDM4++Flrk/mIjXfYl8UECEazV1x1jNE/tLvaHSy7OhVb3pXF1ICR6nKpnwzO/eSW62h5moEIZrGd1RQM8WSi37L5rd+7XJ1yAdgSsJm6BZ8h6uwiOZtZ25VNuZ4n/l3fXdBbJfO0ERJSbxesR8cdHAWFWABU3E/luXcRz6mMsCL+ADL8jkhJNYAcBPUemMYY0Qoeq/pfGu3XRwXs8A6c20wvq/y/8wVyc1ETT8ZWjydOdDJOK9TFsszBPjy6A==
  signature:
  sLRU2i3WEHp318VDZkdR8xDPren4unuL1HVKvixIY39XdRoecSAunmhbxbzLLyMhCyyD0Zoat6Q4uhYnYnolu99Emi8E7hoC/w7N4/bxLbVVBM3JkYCkREFoDzoBsH2ELFJLeiOaFwpLbgA/RGZwNE5pp8xQ0N4VPHuNvUnqz1CrhBbB20CfB7CnlyOFaKTtESD9bdK3XJ0oCaAa8WiJvUCVYEz3rObwP2XqALATo2Mgtl+31FtKPH7NxXNaH12DjmytEQQqbaGDFnx52zG6QHHtb7bdfKwTOmeXCyNJrpByPOKryxkE72J3cf+zp8+jH42rgKYU/jFPLIDwsjdfoA==
  
  second half:
  XEJ6UWAUa+EV5/zLlMmFh2eYwENx/iE+/DfukBehpYugwA/ODq+V3Bo2HNSYvl+UvAynEayt3wmevbRzVVVQpjEYWoQW9+C57e550jhxGBg4kJBqb6ZYAQebew1w/Pq0r7z8qQltn5i67Ig5EydqkC2qWhUgKzwAyWh6yocTUm+6NzGTtsNX9Z81Qflx8YmBk6zVsDgswbQJB2tRbjWHSkceWdvyyT83aZAUzzXl7ojnlrc7iagTfeoQy4+Mr43ddyRzHh3XwvkRyyhw0fKn+36Tms+P3fIsB+iXd6lvkLCGB1Zt5YmJJcncxCfclP/Ckgr7Lj4EV8NPuLV7HtB4iA==
  Signature:
  gvbWeqn9RIdZ9ugn3JQlC533EuGmVdm62kljZMfKNQjPtDpks4YoBN3rhU3OLvWo5VbQpQzu44fGO0BwVR6u9tMeZ/x8b1HLtPbTUXorD6HYio9Qi3eFsEwldnrlLt527Vcc5fNXJtscRA6yks1l1XCozG+3j2TgS2iSlCuAxLKqze37rVNbMZcw6B1TPCyTwUGuCXpPA0hb7Nv3hp/MPskebHvQXKhbP36UDjaAthRDzTw2RYAc26PDxJr2yE0MFohcVRHyaxs/RFNDjKreAdeeT6YeoZtH6wFY5rZxSOEKjKP+ajVyGPb5sNHy8qPRCFXQy/CTtz6HnM6Tb4B0Fg==
  

* Bonus Objective 3\.
  * [*]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [*]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/WvhOlN9.gif' title='Video Walkthrough' width='800' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [2017] [RONGFA LU]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
