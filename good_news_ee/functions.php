<?php

  declare(strict_types=1);

  require __DIR__.'/data.php';

	// This function and the functions below will fetch values from an array
	// provided as an argument on the index provided as an argument.
	// These functions are not strictly necessary but they help keep
	// the view and storage seperate.
	function getTitle(array $array, int $index): string {
		return $array[$index]['title'];
	}

	function getContent(array $array, int $index): string {
		return $array[$index]['content'];
	}

	function getAuthorName(array $array, int $index): String {
		return $array[$index]['author']['name'];
	}

	function getPublishedDate(array $array, int $index): string {
		return $array[$index]['published'];
	}

	function getLikes(array $array, int $index): int {
		return $array[$index]['likes'];
	}
