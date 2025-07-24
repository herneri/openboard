/*
	Copyright (C) 2025  Eric Hernandez

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU Affero General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU Affero General Public License for more details.

	You should have received a copy of the GNU Affero General Public License
	along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

function validate_post(e) {
	var result = true;

	const maximum_title_length = 30;
	const maximum_content_length = 255;
	const maximum_image_name_length = 150;

	const error_message = document.getElementById("message");

	const title = document.getElementById("title");
	const author = document.getElementById("author");
	const content = document.getElementById("content");
	const image = document.getElementById("image");

	if (title.value == "" || title.value.length > maximum_title_length) {
		error_message.innerText += `- Title must be present and less than ${maximum_title_length} characters \n`;
		result = false;	
	}

	if (content.value == "" || content.value.length > maximum_content_length) {
		error_message.innerText += `- Content must be present and less than ${maximum_content_length} characters \n`;
		result = false;
	}

	if (image.value == "" || image.value.length > maximum_image_name_length) {
		error_message.innerText += `- Image file name must be present and less than ${maximum_image_name_length} characters \n`;
		result = false;
	}

	if (result == false) {
		e.preventDefault();
		return;
	}

	error_message.innerText = "";
	return;
}

document.getElementById("post_form").addEventListener("submit", validate_post);
