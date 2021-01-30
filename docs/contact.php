<?php

declare(strict_types=1);

/**
 * @OA\Post(
 ** path="/api/contact",
 *	tags={"Contact"},
 *	summary="Send an inquiry",
 *	operationId="contact",
 *	@OA\RequestBody(
 *		description="Contact form data",
 *		required=true,
 *		@OA\MediaType(
 *			mediaType="application/x-www-form-urlencoded",
 *			@OA\Schema(
 *				@OA\Property(
 *					property="name",
 *					description="full name",
 *					type="string"
 *				),
 *				@OA\Property(
 *					property="email",
 *					description="User email",
 *					type="string"
 *				),
 *				@OA\Property(
 *					property="phone",
 *					description="Phone number",
 *					type="string"
 *				),
 *				@OA\Property(
 *					property="subject",
 *					description="Email subject",
 *					type="string"
 *				),
 *				@OA\Property(
 *					property="message",
 *					description="Message content",
 *					type="string"
 *				),
 *			),
 *		),
 *	),
 *	@OA\Response(
 *		response=200,
 *		description="Sent",
 *		@OA\MediaType(
 *			mediaType="application/json",
 *		)
 *	),
 *	@OA\Response(
 *	response=403,
 *		description="Forbidden"
 *	)
 *)
 **/
