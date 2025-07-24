# openboard

Light, libre image board technology written in vanilla PHP that can be slightly customized.

## Tech Stack

### Frontend

HTML, CSS, basic and unrequired JavaScript. This is the default but it can be
replaced with any frontend interface thanks to openboard's utilization of microservices.

### Backend

Vanilla PHP for server-side rendering and microservices

### Database

MySQL or MariaDB

## Setup and Configuration

Run this statement in your MySQL or MariaDB DBMS before using openboard:
`CREATE DATABASE openboard;`

The image board name, individual board names, database information, and other aspects of
openboard can be configured in `config.json`, which is stored in the base directory of it's
Git repo.

No JSON key/value pairs should be removed at all as every option is used and relied on
for full functionality.

### config.json Explanation 

```
	// Some settings will already be set with defaults. You can leave those if they
	// are appropriate for your configuration, or you can change them as needed.

	"index": {
		// These settings are for defining values that will be
		// used through the entire website.
	}

	"database": {
		// Vital for database connectivity, without which openboard
		// cannot function. Do not leave any of these empty. You must
		// also make sure that these are correct in accordance with your DBMS.
	}

	"style": {
		// Colors for various aspects of openboard.
	}
```
